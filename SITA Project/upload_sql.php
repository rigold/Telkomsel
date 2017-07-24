<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sita";

    $conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['submit']))
{
    if(!empty($_FILES['file']['name']))
    {
        if(is_uploaded_file($_FILES['file']['tmp_name']))
        {
            
            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            //skip first line
            fgetcsv($csvFile);
            fgetcsv($csvFile);
            fgetcsv($csvFile);
            
            //parse data from csv file line by line
            while(($line = fgetcsv($csvFile,0,";")) !== FALSE)
            {
                //check whether member already exists in database with same email
                $prevQuery = "SELECT sites_id FROM site WHERE sites_id = '".$line[0]."'";
                $prevResult = $conn->query($prevQuery);
                if($prevResult->num_rows > 0)
                {
                    //update member data
                    $conn->query("UPDATE site SET sites_kota_kabupaten = '".$line[0]."'");
                    echo "update";
                }
                else{
                    //insert member data into database
                    mysqli_query($conn, "INSERT INTO daerah (kota_kabupaten) VALUES('$line[6]') ");
                    mysqli_query($conn, "INSERT INTO site (sites_id,sites_kota_kabupaten) VALUES('$line[0]','$line[6]') ");

                    echo "<br> insert->";
                    echo $line[0]; echo ",".$line[1];
                    //echo $line[1];
                    //echo $line[2];
                }
            }
            //close opened csv file
            fclose($csvFile);

            $qstring = '?status=succ';
            echo "IF 3";
        }
        else
        {
            $qstring = '?status=err';
        }
        echo "IF 2";
    }
    else
    {
        $qstring = '?status=invalid_file';
    }
    echo "IF 1";
}

//redirect to the listing page
//header("Location: List_Sites.php".$qstring);