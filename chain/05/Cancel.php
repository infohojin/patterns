<?php
class Cancel extends Chain
{
    public function execute($event)
    {
        if ($event == "cancel") {
            return "취소 처리합니다.";
        }

        return $this->Next->execute($event);
    }
}
