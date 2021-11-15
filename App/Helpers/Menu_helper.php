<?php
function showCategoriesFooter($ListCategory, $parent_id = 0, $char = '', $stt = 0)
{
    $cate_child = array();
    foreach ($ListCategory as $key => $item){
        if ($item['parent_id'] == $parent_id) {
            $cate_child[] = $item;
            unset($ListCategory[$key]);
        }
    }
    if ($cate_child) {
        if ($stt == 0) {
            foreach ($cate_child as $key => $item){
                // Hiển thị tiêu đề chuyên mục
                echo '<li>'.'<a href="'._WEB_ROOT.'/danh-muc-cha/'.$item['id'].'">'.$item['category_name']. '</a>';
                ;
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategoriesFooter($ListCategory, $item['id'], $char.'|---', ++$stt);
                echo '</li>';
            }
        } else {
            echo '<ul class="submenu-footer_list">';
            foreach ($cate_child as $key => $item){
                // Hiển thị tiêu đề chuyên mục
                echo '<li>'.'<a href="'._WEB_ROOT.'/danh-muc-con/'.$item['id'].'">'.$item['category_name']. '</a>';
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategoriesFooter($ListCategory, $item['id'], $char.'|---', ++$stt);
                echo '</li>';
            }
            echo '</ul>';           
        }
    }
}
function showCategoriesHeader($ListCategory, $parent_id = 0, $char = '', $stt = 0)
{
    $cate_child = array();
    foreach ($ListCategory as $key => $item){
        if ($item['parent_id'] == $parent_id) {
            $cate_child[] = $item;
            unset($ListCategory[$key]);
        }
    }
     
    if ($cate_child) {
        if ($stt == 0){
            foreach ($cate_child as $key => $item) {
                echo '<li class="menu-item">'.'<a href="'._WEB_ROOT.'/danh-muc-cha/'.$item['id'].'">'.$item['category_name']. '</a>';
                
                showCategoriesHeader($ListCategory, $item['id'], $char.'|---', ++$stt);
                echo '</li>';
            }
        } else {
            echo '<ul class="submenu-header_list">';
            foreach ($cate_child as $key => $item) {
                echo '<li>'.'<a href="'._WEB_ROOT.'/danh-muc-con/'.$item['id'].'">'.$item['category_name']. '</a>';
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategoriesHeader($ListCategory, $item['id'], $char.'|---', ++$stt);
                echo '</li>';
            }
            echo '</ul>';           
        }
    }
}

?>