<?php
function category_name($id)
{
    if (App\Models\Category::find($id) == '') {
        return App\Models\Category::withTrashed()->find($id)->name;
    } else {
        return App\Models\Category::find($id)->name;
    }
}
?>