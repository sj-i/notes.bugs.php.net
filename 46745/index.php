<html><form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="before ; after">
    <input type="hidden" name="&quot; before ; after">
    <input type="hidden" name="' before ; after">
    <input type="hidden" name="' ' before ; after">
    <input type="hidden" name="' &quot; before ; after">
    <input type="hidden" name="&quot; ' before ; after">
    <input type="hidden" name="&quot; &quot; before ; after">
    <input type="hidden" name="&quot; ' ' before ; after">
    <input type="hidden" name="&quot; ' &quot; before ; after">
    <input type="hidden" name="&quot; &quot; ' before ; after">
    <input type="hidden" name='" " " before ; after'>
    <input type="hidden" name="' ' ' before ; after">
    <input type="hidden" name="' ' &quot; before ; after">
    <input type="hidden" name="' &quot; ' before ; after">
    <input type="hidden" name="' &quot; &quot; before ; after">
    <input type="submit">
</form><pre><?php
    print_r($_POST);
    ?></pre> </html>