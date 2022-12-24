<?php

class MessagePart
{
    public static function generate($message)
    {
        return '
            <div class="message-container">
                <span>
                    Author:<br>'.$message['user_id'].'
                </span>
                <span>
                    '.$message['content'].'
                </span>
                <span class="message-time-container">
                    Created time: '.$message['createdtime'].'
                </span>
            </div>
        ';
    }
}