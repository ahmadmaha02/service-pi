<?php

namespace App\Http\Controllers;
use App\Models\EmployeeAccount;

class ControllerEmpAcc extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function read($nip = null)
    {
        if ($nip) {
            $employeeAccount = EmployeeAccount::find($nip);
            $employeeAccount = $karyawan->EmployeeAccount;

            if (!$employeeAccount) {
                return response()->json([
                    'success' => false,
                    'message' => 'Employee account not found',
                    'data' => null
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => [
                    'employee_account' => $employeeAccount
                ]
            ]);
        } else {
            $employeeAccounts = EmployeeAccount::all();

            return response()->json([
                'success' => true,
                'data' => [
                    'employee_accounts' => $employeeAccounts
                ]
            ]);
        }
    }
}