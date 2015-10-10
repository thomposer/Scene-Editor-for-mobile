<?php
// $Id$
/*
* 过滤不符合的词语
*/


class Util_Badwords
{

	/**
	 * function description
	 * 
	 * @param
	 * @return void
	 */
	 function check($word)
	{
		foreach(self::$s_badwords as $bad) {
			if(strpos($word, $bad) !== FALSE) return true;
		}
		return false;
	}

	/**
	 * function description
	 * 
	 * @param
	 * @return void
	 */
	 function replace(&$str, $replace_str = '***')
	{
		str_replace(self::$s_badwords, $replace_str, $str);
		return $str;
	}



static $s_badwords = array(
	"法轮功",
	"法轮",
	"毛泽东",
	"周恩来",
	"胡锦涛",
	"江泽民",
	"邓小平",
	"刘少奇",
	"江青",
	"陈水扁",
	"拉登",
	"台独",
	"盘古乐队",
	"六四",
	"民运",
	"李洪志",
	"共产党",
	"六合彩",
	"天安门",
	"退党",
	"无网界",
	"三个代表",
	"多党",
	"专政",
	"大纪元",
	"朱镕基",
	"西藏独立",
	"台湾独立",
	"新疆独立",
	"温家宝",
	"侏儒之歌",
	"色情",
	"情色",
	"黄色",
	"AV",
	"成人",
	"性虐待",
	"阴毛",
	"阴茎",
	"口交",
	"三级片",
	"妓女",
	"小电影",
	"应召",
	"fuck",
	"乱交",
	"18禁",
	"偷拍",
	"做爱",
	"性爱"		
);

}
