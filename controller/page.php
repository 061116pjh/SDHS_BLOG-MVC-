<?php 

GET("/", function(){
    views('home');
});

GET("/user/{id}", function($id){
    $datas = (object)[];
    $datas -> id = $id;
    views("users/profile", $datas);
})

GET("/users/{id}/{borad}", function($id, $board){
    $datas = (object)[];
    $datas -> id = $id;
    $datas -> board = $board;
    views("users/board", $datas);
})