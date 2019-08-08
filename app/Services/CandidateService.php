<?php
namespace App\Services;

class CandidateService
{
    public function __construct()
    {
        //
    }

    public function convertNumberStatusToString($numberStatus)
    {
        $stringStatus = NULL;
        switch ((int)$numberStatus) {
            case 1:
                return $stringStatus = "Pending";
                break;
            case 2:
                return $stringStatus = "Deny";
                break;
            case 3:
                return $stringStatus = "Approve Application";
                break;
            case 4:
                return $stringStatus = "Passed";
                break;
            case 5:
                return $stringStatus = "Failed";
                break;
            default:
                break;
        }
        return $stringStatus;
    }

    public function convertStringStatusToNumber($stringStatus)
    {
        $numberStatus = NULL;
        switch (strtolower($stringStatus)) {
            case "pending":
                return $numberStatus = 1;
                break;
            case "deny":
                return $numberStatus = 2;
                break;
            case "approve application":
                return $numberStatus = 3;
                break;
            case "passed":
                return $numberStatus = 4;
                break;
            case "failed":
                return $numberStatus = 5;
                break;
            default:
                break;
        }
        return $numberStatus;
    }
}

