<?php
class Tanggal{
	public static function bulan($name){
		return Date('d-m-Y',strtotime($name));
	}
}