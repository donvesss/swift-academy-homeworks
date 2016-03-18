<?php


echo 'Версия на PHP:  '.phpversion(). '<br>'; 

echo 'Последната промяна е направена на:  '.date ("d.m.Y в H:i:s.", getlastmod());