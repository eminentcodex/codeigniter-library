codeigniter-library partial helper
===================
Using this helper you can print html code which is database bound. If you want to print the database record using a html than use this helper.

How to use:
Include this file in the helper directory of codeigniter and create a folder named partial in the view folder. In the view folder add the html code with the php island code.
Ex. 
$data = array(
        1=> array('name'=>'foo', 'detail'=> 'bar');
        2=> array('name'=>'foo', 'detail'=> 'bar');
        3=> array('name'=>'foo', 'detail'=> 'bar');
        4=> array('name'=>'foo', 'detail'=> 'bar');
        );

Pass this array to the view helper like this:
    partialLoop('admin/user.php', $data);

function : partialLoop('script name in the partial helper folder of the view folder', 2-d array);

You can use the function partial() to print 1-d array
    partial('admin/user.php', $data);

function : partial('script name in the partial helper folder of the view folder', 1-d array);

Call the array index name in the the patial file like this

admin/user.php

<div>Name : <?php echo $name; ?> </div>
<div>Detail : <?php echo $detail; ?> </div>
