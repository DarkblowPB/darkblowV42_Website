<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('load_hintquestion')) {
    function load_hintquestion()
    {
        $question_list = array(
            "What was your childhood nickname?",
            "What is the name of your favorite childhood friend?",
            "In what city or town did your mother and father meet?",
            "What is your favorite team?",
            "What is your favorite movie?",
            "What was your favorite sport in high school?",
            "What was your favorite food as a child?",
            "What is the first name of the boy or girl that you first kissed?",
            "What was the make and model of your first car?",
            "What was the name of the hospital where you were born?",
            "Who is your childhood sports hero?",
            "What school did you attend for sixth grade?",
            "What was the last name of your third grade teacher?",
            "In what town was your first job?",
            "What was the name of the company where you had your first job?"
        );

        return $question_list;
    }
}
