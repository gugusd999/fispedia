<?php 


function ai($value='')
{
	return 'INT('.$value.') AUTO_INCREMENT PRIMARY KEY';
}

function char($value='255')
{
	return 'VARCHAR('.$value.')';
}

function int($value = 11)
{
	return 'INT('.$value.')';
}

function text()
{
	return 'TEXT';
}

function textlong()
{
	return 'LONGTEXT';
}

function timestamp()
{
	return ' TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ';
}