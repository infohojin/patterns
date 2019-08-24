<?php
class Cancel
{
    public function execute($event)
    {
        if ($event == "cancel") {
            return "취소 처리합니다.";
        }
    }
}
