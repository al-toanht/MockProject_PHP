<?php

class AppServiceProvider extends ServiceProvider {
    public function boot(){
        $listCategories = $this->db->table('categories')->select()->get();
        $data['listCategories'] = $listCategories;
        
        View::share($data);
    }
}
?>