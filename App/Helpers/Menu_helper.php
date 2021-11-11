<?php
function showCategoriesFooter($ListCategory, $parent_id = 0, $char = '', $stt = 0)
{
    // BƯỚC 2.1: LẤY DANH SÁCH CATE CON
    $cate_child = array();
    foreach ($ListCategory as $key => $item)
    {
        // Nếu là chuyên mục con thì hiển thị
        if ($item['parent_id'] == $parent_id)
        {
            $cate_child[] = $item;
            unset($ListCategory[$key]);
        }
    }
     
    // BƯỚC 2.2: HIỂN THỊ DANH SÁCH CHUYÊN MỤC CON NẾU CÓ
    if ($cate_child)
    {
        if ($stt == 0){
            foreach ($cate_child as $key => $item)
            {
                // Hiển thị tiêu đề chuyên mục
                echo '<li>'.'<a href="'._WEB_ROOT.'/trang-chu/showNewsParentCategory/'.$item['id'].'">'.$item['category_name']. '</a>';
                ;
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategoriesFooter($ListCategory, $item['id'], $char.'|---', ++$stt);
                echo '</li>';
            }
        }else {
            echo '<ul class="submenu-footer_list">';
            foreach ($cate_child as $key => $item)
            {
                // Hiển thị tiêu đề chuyên mục
                echo '<li>'.'<a href="'._WEB_ROOT.'/trang-chu/showNewsChildCategory/'.$item['id'].'">'.$item['category_name']. '</a>';
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
    // BƯỚC 2.1: LẤY DANH SÁCH CATE CON
    $cate_child = array();
    foreach ($ListCategory as $key => $item)
    {
        // Nếu là chuyên mục con thì hiển thị
        if ($item['parent_id'] == $parent_id)
        {
            $cate_child[] = $item;
            unset($ListCategory[$key]);
        }
    }
     
    // BƯỚC 2.2: HIỂN THỊ DANH SÁCH CHUYÊN MỤC CON NẾU CÓ
    if ($cate_child)
    {
        if ($stt == 0){
            foreach ($cate_child as $key => $item)
            {
                // Hiển thị tiêu đề chuyên mục
                echo '<li class="menu-item">'.'<a href="'._WEB_ROOT.'/trang-chu/showNewsParentCategory/'.$item['id'].'">'.$item['category_name']. '</a>';
                ;
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategoriesHeader($ListCategory, $item['id'], $char.'|---', ++$stt);
                echo '</li>';
            }
        }else {
            echo '<ul class="submenu-header_list">';
            foreach ($cate_child as $key => $item)
            {
                // Hiển thị tiêu đề chuyên mục
                echo '<li>'.'<a href="'._WEB_ROOT.'/trang-chu/showNewsChildCategory/'.$item['id'].'">'.$item['category_name']. '</a>';
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategoriesHeader($ListCategory, $item['id'], $char.'|---', ++$stt);
                echo '</li>';
            }
            echo '</ul>';           
        }
    }
}

 ?>