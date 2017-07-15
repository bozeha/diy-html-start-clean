

<?php

include 'content/guides_pull.php';

for($loop2=0;$loop2!=$guides_array['loop'];$loop2++) {
    
    echo "<div data-guide-selected='false' data-guide-id='".$guides_array['id'][$loop2]."' class='col-xs-6 selected-guide'><a href='display-guide.php?guide=".$guides_array['id'][$loop2]."'><button class='btn edit-gudie-btn'>לצפיה במדריך</button></a><button class='btn admin-privileges edit-gudie-btn' onclick='markForDelete(this)'>סמן מדריך</button><button class='btn edit-gudie-btn' onclick=window.open('dashboard.php?dash=edit-guide&guide=".$guides_array['id'][$loop2]."')>ערוך מדריך</button><img src='".$guides_array['guide_images_array_fix'][$loop2][0]."' class='img-responsive  pull-left' style='max-width:177px;height:96px'>";
    echo "<h5 style='font-weight:900;font-family:open'><strong></strong>".$guides_array['guide_title'][$loop2]."</h5>";
    //echo "<p  style='background:#eee;margin-top:0px;padding:10px'>".$guides_array['guide_subtitle'][$loop2]."</p>";
    
    
    $is_active = ($guides_array['active'][$loop2] ? 'checked' : '');
    echo "<input class='checkboxs' id='active-".$guides_array['id'][$loop2]."' ".$is_active." type='checkbox' >";
    
        
    
    echo "</div>";
}
echo "<button type='button' class='btn btn-danger btn-info btn-lg remove_selected_guides admin-privileges' data-toggle='modal' data-target='#myModal'>מחק את המדריכים המסומנים</button>";



?>
<script src="scripts/active-guide.js"></script>