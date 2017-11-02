<?php

 function myCalender($year = '', $month = '', $timezone = 'Asia/Shanghai')
  {
     
     date_default_timezone_set ( $timezone );
      $year = abs ( intval ( $year ) );
      $month = abs ( intval ( $month ) );
      
      //是否是32位机
     if (is32())
      {
        if ($year < 1970 or $year >= 2038)
         {
            $year = date ( 'Y' );
         }
    } else
    {
          if ($year <= 0)
        {
         $year = date ( 'Y' );
          }
    }
     
     if ($month <= 0 or $month > 12)
   {
          $month = date ( 'm' );
      }
     
     //上一年
      $pretYear = $year - 1;
     //上一月
     $mpYear = $year;
     $preMonth = $month - 1;
     if ($preMonth <= 0)
  {
         $preMonth = 1;
        $mpYear = $pretYear;
     }
     
     //下一年
    $nextYear = $year + 1;
     //下一月
    $mnYear = $year;
     $nextMonth = $month + 1;
    if ($nextMonth > 12)
     {
        $nextMonth = 1;
        $mnYear = $nextYear;
     }
   
     //日历头
    $html = <<<HTML
<table width="500" border="1">
    <tr align="center">
     <td><a href="?y=$pretYear">上一年</a></td>
    <td><a href="?y=$mpYear&m=$preMonth">上一月</a></td>
      <td><a href="?">回到今天</a></td>
      <td><a href="?y=$mnYear&m=$nextMonth">下一月</a></td>
    <td><a href="?y=$nextYear">下一年</a></td>
    </tr>
    <tr align="center">
      <td colspan="5">{$year}年{$month}月</td>
   </tr>
    <tr>
        <td colspan="5">
          <table width="100%" border="1">
              <tr align="center">
                  <td style="background-color:#DAF0DD;">星期一</td>
                  <td style="background-color:#DAF0DD;">星期二</td>
                  <td style="background-color:#DAF0DD;">星期三</td>
                  <td style="background-color:#DAF0DD;">星期四</td>
                  <td style="background-color:#DAF0DD;">星期五</td>
                  <td style="background-color:#F60;color:#fff;font-weight: bold;">星期六</td>
                  <td style="background-color:#F60;color:#fff;font-weight: bold;">星期天</td>
             </tr>
  HTML;
     
     $currentDay = date ( 'Y-m-j' );
     
     //当月最后一天
      $lastday = date ( 'j', mktime ( 0, 0, 0, $nextMonth, 0, $year ) );
      
      //循环输出天数
      $day = 1;
      $line = '';
      while ( $day <= $lastday )
      {
         $cday = $year . '-' . $month . '-' . $day;
         
         //当前星期几
         $nowWeek = date ( 'N', mktime ( 0, 0, 0, $month, $day, $year ) );        
if ($day == 1)
         {
             $line = '<tr align="center">';
             $line .= str_repeat ( '<td>&nbsp;</td>', $nowWeek - 1 );
         }
         
         if ($cday == $currentDay)
         {
             $style = 'style="color:red;"';
         } else
         {
             $style = '';
         }         
         $line .= "<td $style>$day</td>";
         
         //一周结束
         if ($nowWeek == 7)
         {
             $line .= '</tr>';
             $html .= $line;
            $line = '<tr align="center">';
         }
        
        //全月结束
         if ($day == $lastday)
     {
             if ($nowWeek != 7)
            {
                 $line .= str_repeat ( '<td>&nbsp;</td>', 7 - $nowWeek );
            }
            $line .= '</tr>';
             $html .= $line;
           
             break;
     }
         
   $day ++;
  }
    
     $html .= <<<HTML
         </table>    
    </td>
   </tr>
 </table>
 HTML;
     return $html;
 }


 function is32()
 {
     $is32 = False;
   if (strtotime ( '2039-10-10' ) === False)
   {
         $is32 = True;
    }
    return $is32;