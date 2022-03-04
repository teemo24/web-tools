<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebTools</title>
    <style>
        table, td, th {
            border: 1px solid;
            min-height: 64px;
        }
        table {
            border-collapse: collapse;
            width:100%;
        }
        .container{
            width:80%;
            margin: 0 auto;
        }
    </style>
    <?php
        define('OCT',1024);
        define('Mo',1024 * OCT);
        define('Go',1024 * Mo);
        define('To',1024 * Go);
        define('TOTAL_SPACE', disk_total_space("."));
        define('FREE_SPACE', disk_free_space("."));
        $files = glob("./*");
        $filecount = 0;
        if ($files){
            $filecount = count($files);
        }
        /*
        $opened_ports = [];
        $host = gethostname();
        $ports = array(21, 25, 80, 81, 110, 443, 3306);
        foreach ($ports as $port)
        {
            $connection = @fsockopen($host, $port);

            if (is_resource($connection))
            {
                $opened_ports[] = $port . ' ' . '(' . getservbyport($port, 'tcp');

                fclose($connection);
            }
        }
        */
    ?> 
</head> 
<body>
    <div class="container">
        <table class="table-information">
            <tr><td style="text-align:center;"> Web Tools</td></tr>
            <tr>
                <td class="field-informatons">
                    <code>
                        OS: <?php echo php_uname().' | '.PHP_OS; ?><br>

                        PHP Version: <?php echo phpversion(); ?><br>

                        HDD: Total Space: <?php echo TOTAL_SPACE/Go.'Go';?>  | Free space: <?php echo FREE_SPACE/Go.' Go';?> <br>

                        More Info:<br>
                                    IP: <?php echo $_SERVER['SERVER_ADDR'];?><br>
                                    Files Count: <?php echo $filecount;?>
                                    <!-- Opened Ports: <?php //print_r($opened_ports);?> -->
                    </code>
                </td>
            </tr>
            <tr>
                <td>
                    <button>Database</button>
                    <button>Listener</button>
                    <button>Advanced Search</button>
                    <button>Script Manipulation</button>
                    <button>BruteForce</button>
                    <button>Network</button>
                    <button>Mailer</button>
                    <button>Settings</button>
                    <button>Logs</button>
                </td>
            </tr>
        </table>
        <table class="table-files-browser">
            <tr class="files-browser-options">
                <td>Refresh</td>
                <td>Back</td>
                <td>Current path</td>
                <td>Browse</td>
                <td>New file</td>
                <td>New Directory</td>
                <td>Upload</td>
                <td>Paste</td>
            </tr>
        </table>
        <table class="files-browser-content">
            <tr class="files-browser-fields">
                <td>#</td>
                <td>Name</td>
                <td>Size</td>
                <td>Last update</td>
                <td>Permissions</td>
                <td>Actions</td>
            </tr>
            <tr class="file-details">
                <td><input type="checkbox" name="files[]" /></td>
                <td>index.php</td>
                <td>167.63 KB</td>
                <td>2021-03-14 06:05:32</td>
                <td>-rw-r-r--</td>
                <td>
                    <button>Edit</button>
                    <button>Move</button>
                    <button>Copy</button>
                    <button>Download</button>
                    <button>Delete</button>
                </td>
            </tr>
            <tr class="files-actions-group">
                <td>
                    <select name="multiple-actions">
                        <option value="download">Move</option>
                        <option value="download">Copy</option>
                        <option value="download">Download</option>
                        <option value="delete">Delete</option>
                    </select>
                    <button>Execute</button>
                </td>
            </tr>
        </table>
        <table class="files-browser-clipboard">
            <tr>
                <td>Source</td>
                <td>Action</td>
                <td>Destination</td>
                <td>Result</td>
            </tr>
            <tr>
                <td><input type="text" name="source"></td>
                <td><button>Move</button></td>
                <td><input type="text" name="destination"></td>
                <td><span>Success!</span></td>
            </tr>
        </table>
    </div>
</body>
</html>