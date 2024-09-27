<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Calendar;

class Calendar
{
    protected $optionalData = [
        'week' => false,
        'month' => false,
        'text' => false,
        'difference' => false
    ];
    
    protected $inputDate;
    protected $inputTimestamp;
    
    protected $monthStartDate;
    protected $monthStartTimestamp;
    
    protected $monthEndDate;
    protected $monthEndTimestamp;
    
    /**
     * @param string $date - optional
     */
    public function __construct($date = null)
    {
        $this->inputDate = ($date === null) ? date('Y-m-d') : date('Y-m-d', strtotime($date));        
        $this->calculateDates();
    }
    
    public function outputWeek($output = true)
    {
        $this->optionalData['week'] = $output ? true : false;
        return $this;
    }
    
    public function outputMonth($output = true)
    {
        $this->optionalData['month'] = $output ? true : false;
        return $this;
    }
    
    public function outputText($output = true)
    {
        $this->optionalData['text'] = $output ? true : false;
        return $this;
    }
    
    public function outputDifference($output = true)
    {
        $this->optionalData['difference'] = $output ? true : false;
        return $this;
    }
    
    protected function calculateDates()
    {
        $this->inputTimestamp = strtotime($this->inputDate);
        
        $this->monthStartTimestamp = strtotime(date('Y-m-', $this->inputTimestamp) . '1');
        $this->monthStartDate = date('Y-m-d', $this->monthStartTimestamp);
        
        $this->monthEndDate = date('Y-m-t', $this->inputTimestamp);
        $this->monthEndTimestamp = strtotime($this->monthEndDate);
    }
    
    public function getWeekSplitMonth()
    {
        return $this->getMonth(true, true);
    }
    
    public function getMonth($includeLeadingMondayAndTrailingSunday = false, $weekSplit = false)
    {
        $startTimestamp = $this->generateMonthStartDate($includeLeadingMondayAndTrailingSunday);
        $endTimestamp = $this->generateMonthEndDate($includeLeadingMondayAndTrailingSunday);
        
        $monthDateArray = [];
        
        for ($timestamp = $startTimestamp; $timestamp <= $endTimestamp; $timestamp = strtotime('+1 day', $timestamp)) {
            $dateArray = $this->getDefaultDateArray($timestamp);
            $this->addOptionalData($dateArray);
            $monthDateArray[$dateArray['date']['iso']] = $dateArray;
        }
        
        if ($weekSplit) {
            return array_chunk($monthDateArray, 7, true);
        } else {
            return $monthDateArray;
        }
    }
    
    public function getMonthStartDate()
    {
        return $this->monthStartDate;
    }
    
    public function getMonthStartTimestamp()
    {
        return $this->monthStartTimestamp;
    }
    
    public function getMonthEndDate()
    {
        return $this->monthEndDate;
    }
    
    public function getMonthEndTimestamp()
    {
        return $this->monthEndTimestamp;
    }
    
    protected function generateMonthStartDate($includeLeadingMonday = false)
    {
        return (intval(date('N', $this->monthStartTimestamp)) === 1 || $includeLeadingMonday === false) ?
            $this->monthStartTimestamp :
            strtotime('previous monday', $this->monthStartTimestamp);
    }
    
    protected function generateMonthEndDate($includeTrailingFriday = false)
    {
        return (intval(date('N', $this->monthEndTimestamp)) === 7 || $includeTrailingFriday === false) ?
            $this->monthEndTimestamp :
            strtotime('this sunday', $this->monthEndTimestamp);
    }
    
    protected function getDefaultDateArray($timestamp)
    {
        return [
            'timestamp' => $timestamp,
            'date' => [
                'iso' => date('Y-m-d', $timestamp),
                'uk' => date('d/m/Y', $timestamp),
                'us' => date('m/d/Y', $timestamp)
            ],
            'day' => intval(date('j', $timestamp)),
            'month' => intval(date('n', $timestamp)),
            'year' => intval(date('Y', $timestamp))
        ];
    }
    
    protected function addOptionalData(&$dateArray)
    {
        foreach ($this->optionalData as $type => $enabled) {
            if ($enabled) {
                $methodName = 'add' . strtoupper(substr($type, 0, 1)) . substr($type, 1);
                $this->$methodName($dateArray);
            }
        }
    }
    
    protected function addWeek(&$dateArray)
    {
        $dateArray['week'] = [
            'dayOfWeek' => intval(date('N', $dateArray['timestamp'])),
            'isWeekend' => in_array(intval(date('N', $dateArray['timestamp'])), [6, 7], true),
            'isWeekday' => !in_array(intval(date('N', $dateArray['timestamp'])), [6, 7], true)
        ];
    }
    
    protected function addMonth(&$dateArray)
    {
        $dateArray['month'] = [
            'isInputMonth' => (intval(date('n', $dateArray['timestamp'])) === intval(date('n', $this->inputTimestamp))),
            'isTodayMonth' => (intval(date('n', $dateArray['timestamp'])) === intval(date('n'))),
            'totalDays' => intval(date('t', $dateArray['timestamp']))
        ];
    }
    
    protected function addText(&$dateArray)
    {
        $dateArray['text'] = [
            'dayShort' => date('D', $dateArray['timestamp']),
            'dayLong' => date('l',  $dateArray['timestamp']),
            'monthShort' => date('M', $dateArray['timestamp']),
            'monthLong' => date('F', $dateArray['timestamp'])
        ];
    }
    
    protected function addDifference(&$dateArray)
    {
        $dateArray['difference'] = [
            'input' => ($dateArray['timestamp'] - $this->inputTimestamp) / 24 / 60 / 60,
            'today' => ($dateArray['timestamp'] - strtotime(date('Y-m-d'))) / 24 / 60 / 60,
        ];
    }
    
}
