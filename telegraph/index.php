<?php

$textStorage = [];

function add($title, $text, &$textStorage) {
  $textStorage[] = ['title' => $title, 'text' => $text];
}

function remove($index, &$textStorage) {
  if (isset($textStorage[$index])) {
    unset($textStorage[$index]);
    return true;
  } else {
    return false;
  }
}

function edit($index, $newTitle, $newText, &$textStorage) {
  if (isset($textStorage[$index])) {
    $textStorage[$index]['title'] = $newTitle;
    $textStorage[$index]['text'] = $newText;
    return true;
  } else {
    return false;
  }
}

add("Заголовок 1", "Текст 1", $textStorage);
add("Заголовок 2", "Текст 2", $textStorage);

print_r($textStorage);

echo remove(0, $textStorage); 
echo remove(5, $textStorage); 

print_r($textStorage);

echo edit(0, "Новый заголовок", "Новый текст", $textStorage);

print_r($textStorage);

echo edit(5, "Новый заголовок", "Новый текст", $textStorage); 