<?php

namespace Database\Seeders;

use EndyJasmi\Cuid;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SelectOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('select_options')->insert([
            //ContactType
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'contactType',
                'name' => 'phone',
                'label' => 'Phone',
                'value' => 'PHONE'
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'contactType',
                'name' => 'email',
                'label' => 'Email',
                'value' => 'EMAIL'
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'contactType',
                'name' => 'postalAddress',
                'label' => 'Postal Address',
                'value' => 'POSTAL_ADDRESS'
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'contactType',
                'name' => 'digitalAddress',
                'label' => 'Digital Address',
                'value' => 'DIGITAL_ADDRESS'
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'contactType',
                'name' => 'address',
                'label' => 'Address',
                'value' => 'ADDRESS'
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'contactType',
                'name' => 'socialMediaHandle',
                'label' => 'Social Media Handle',
                'value' => 'SOCIAL_MEDIA_HANDLE'
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'contactType',
                'name' => 'website',
                'label' => 'Website',
                'value' => 'WEBSITE'
            ],
            // EnrollmentStatus
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'enrollmentStatus',
                'name' => 'enrolled',
                'label' => 'Enrolled',
                'value' => 'ENROLLED'
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'enrollmentStatus',
                'name' => 'deferred',
                'label' => 'Deferred',
                'value' => 'DEFERRED'
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'enrollmentStatus',
                'name' => 'completed',
                'label' => 'Completed',
                'value' => 'COMPLETED'
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'enrollmentStatus',
                'name' => 'trailed',
                'label' => 'Trailed',
                'value' => 'TRAILED',
            ],
            // FeeType
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'feeType',
                'name' => 'schoolFees',
                'label' => 'School Fees',
                'value' => 'SCHOOL_FEES',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'feeType',
                'name' => 'departmentalFees',
                'label' => 'Departmental Fees',
                'value' => 'DEPARTMENTAL_FEES',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'feeType',
                'name' => 'srcDues',
                'label' => 'SRC Dues',
                'value' => 'SRC_DUES',
            ],
            // PaymentCycle
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentCycle',
                'name' => 'annual',
                'label' => 'Annual',
                'value' => 'ANNUAL',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentCycle',
                'name' => 'biAnnual',
                'label' => 'BiAnnual',
                'value' => 'BI_ANNUAL',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentCycle',
                'name' => 'triAnnual',
                'label' => 'TriAnnual',
                'value' => 'TRI_ANNUAL',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentCycle',
                'name' => 'quarterly',
                'label' => 'Quarterly',
                'value' => 'QUARTERLY',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentCycle',
                'name' => 'monthly',
                'label' => 'Monthly',
                'value' => 'MONTHLY',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentCycle',
                'name' => 'weekly',
                'label' => 'Weekly',
                'value' => 'WEEKLY',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentCycle',
                'name' => 'daily',
                'label' => 'Daily',
                'value' => 'DAILY',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentCycle',
                'name' => 'oneTime',
                'label' => 'One Time',
                'value' => 'ONE_TIME',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentCycle',
                'name' => 'payAsYouGo',
                'label' => 'Pay as you go',
                'value' => 'PAY_AS_YOU_GO',
            ],
            // PaymentMethod
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentMethod',
                'name' => 'TRANSFLOW',
                'label' => 'TRANSFLOW',
                'value' => 'TRANSFLOW',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentMethod',
                'name' => 'bankersDraft',
                'label' => 'Bankers Draft',
                'value' => 'BANKERS_DRAFT',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentMethod',
                'name' => 'cheque',
                'label' => 'Cheque',
                'value' => 'CHEQUE',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentMethod',
                'name' => 'mobileTransfer',
                'label' => 'mobile Transfer',
                'value' => 'MOBILE_TRANSFER',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentMethod',
                'name' => 'accountTransfer',
                'label' => 'Account Transfer',
                'value' => 'ACCOUNT_TRANSFER',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentMethod',
                'name' => 'cashDeposit',
                'label' => 'Cash Deposit',
                'value' => 'CASH_DEPOSIT',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'paymentMethod',
                'name' => 'cashPayment',
                'label' => 'Cash Payment',
                'value' => 'CASH_PAYMENT',
            ],
            // Bank
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'bank',
                'name' => 'GCB',
                'label' => 'Ghana Commercial Bank',
                'value' => 'GCB',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'bank',
                'name' => 'ADB',
                'label' => 'Agriculture Development Bank',
                'value' => 'ADB',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'bank',
                'name' => 'ZenithBank',
                'label' => 'Zenith Bank',
                'value' => 'ZENITH',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'bank',
                'name' => 'CBG',
                'label' => 'Consolidated Banks of Ghana',
                'value' => 'CBG',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'bank',
                'name' => 'NIB',
                'label' => 'National Investment Bank',
                'value' => 'NIB',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'bank',
                'name' => 'PrudentialBank',
                'label' => 'Prudential Bank',
                'value' => 'PRUDENTIAL',
            ],
            //ProfileType
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'profileType',
                'name' => 'student',
                'label' => 'Student',
                'value' => 'STUDENT',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'profileType',
                'name' => 'lecturer',
                'label' => 'Lecturer',
                'value' => 'LECTURER',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'profileType',
                'name' => 'staff',
                'label' => 'Staff',
                'value' => 'STAFF',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'profileType',
                'name' => 'user',
                'label' => 'User',
                'value' => 'USER',
            ],
            // MaritalStatus
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'maritalStatus',
                'name' => 'married',
                'label' => 'Married',
                'value' => 'MARRIED',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'maritalStatus',
                'name' => 'DIVORCED',
                'label' => 'DIVORCED',
                'value' => 'DIVORCED',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'maritalStatus',
                'name' => 'separated',
                'label' => 'Separated',
                'value' => 'SEPARATED',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'maritalStatus',
                'name' => 'single',
                'label' => 'Single',
                'value' => 'SINGLE',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'maritalStatus',
                'name' => 'engaged',
                'label' => 'Engaged',
                'value' => 'ENGAGED',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'maritalStatus',
                'name' => 'widow',
                'label' => 'Widow',
                'value' => 'WIDOWER',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'maritalStatus',
                'name' => 'widower',
                'label' => 'Widower',
                'value' => 'WIDOWER',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'maritalStatus',
                'name' => 'dating',
                'label' => 'Dating',
                'value' => 'DATING',
            ],
            // AdmissionStatus
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'admissionStatus',
                'name' => 'admitted',
                'label' => 'Admitted',
                'value' => 'ADMITTED',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'admissionStatus',
                'name' => 'graduated',
                'label' => 'Graduated',
                'value' => 'GRADUATED',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'admissionStatus',
                'name' => 'withdrawn',
                'label' => 'Withdrawn',
                'value' => 'WITHDRAWN',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'admissionStatus',
                'name' => 'transferred',
                'label' => 'Transferred',
                'value' => 'TRANSFERRED',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'admissionStatus',
                'name' => 'suspended',
                'label' => 'Suspended',
                'value' => 'SUSPENDED',
            ],
            // TransactionTags
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'transactionTags',
                'name' => 'fees',
                'label' => 'Fees',
                'value' => 'FEES',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'transactionTags',
                'name' => 'dues',
                'label' => 'Dues',
                'value' => 'DUES',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'transactionTags',
                'name' => 'contributions',
                'label' => 'Contributions',
                'value' => 'CONTRIBUTIONS',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'transactionTags',
                'name' => 'utility',
                'label' => 'Utility',
                'value' => 'UTILITY',
            ],
            // SemesterType
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'semesterType',
                'name' => 'firstSemester',
                'label' => 'First Semester',
                'value' => 'FIRST_SEMESTER',
            ],
            [
                'id'=> Cuid::cuid(),
                'fieldName' => 'semesterType',
                'name' => 'secondSemester',
                'label' => 'Second Semester',
                'value' => 'SECOND_SEMESTER',
            ],
        ]);


    }
}
