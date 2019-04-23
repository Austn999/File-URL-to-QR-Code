<?php
function folder_exist($folder)
{
    // Get canonicalized absolute pathname
    $path = realpath($folder);

    // If it exist, check if it's a directory
    if($path !== false AND is_dir($path))
    {
        // Return canonicalized absolute pathname
        return $path;
    }

    // Path/folder does not exist
    return false;
}

function listDirectory($funcDirName){
// open this directory 
if(FALSE !== ($path = folder_exist($funcDirName)))
{
	$myDirectory = opendir("$funcDirName");
    // folder exists
}
else{
	die('Folder ' . $funcDirName . ' doesnt exist please make the folder and try again');
}

// get domain and protcol etc.
$uri = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//set clean directory
$cleanDirName = substr($funcDirName, 2);

// get each entry
while($entryName = readdir($myDirectory)) {
	$dirArray[] = $entryName;
}

// close directory
closedir($myDirectory);

//	count elements in array
$indexCount	= count($dirArray);

// sort 'em
sort($dirArray);
// print 'em
print("<table style=\"margin-top: 15%;\" border=1 cellpadding=5 cellspacing=0 class=whitelinks>\n");
print("<tr><th>Filename</th>\n"); //<th>Filetype</th><th>Filesize</th></TR>
// loop through the array of files and print them all
for($index=0; $index < $indexCount; $index++) {
        if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files
		print("<tr><td><a href=\"$uri$cleanDirName/$dirArray[$index]\">$dirArray[$index]</a></td>");
		print("</tr>\n");
	}
}
print("</table>\n");
}