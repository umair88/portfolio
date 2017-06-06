<?php

function loop_array($array = array(), $parent_id = 0) {
    
    if(!empty($array[$parent_id])) {
        
        echo '<ul id="main-menu">';
        foreach($array[$parent_id] as $items){
            echo'<li><a href="category.php?cat=<?=">';
            echo $items['name'];
            loop_array($array, $items['id']);
            echo '</a></li>';
        }
        echo '</ul>';
    }
}

function display_menus() {
    
    $con = mysqli_connect("localhost", "root", "mysql","user_login");
    $query = $con->query("SELECT * FROM nav_menu");
    $array = array();
    
    if(mysqli_num_rows($query)){
        while($rows = mysqli_fetch_array($query)) {
        
            $array[$rows['parent_id']][] = $rows;
            
        }
        
        loop_array($array);
        
    }
}