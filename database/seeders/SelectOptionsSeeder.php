<?php

namespace Database\Seeders;

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
        DB::table('selectOptions')->insert([
            //ContactType
            [
                'fieldName' => 'contactType',
                'name' => 'phone',
                'label' => 'Phone',
                'value' => 'PHONE'
            ],
            [
                'fieldName' => 'contactType',
                'name' => 'email',
                'label' => 'Email',
                'value' => 'EMAIL'
            ],
            [
                'fieldName' => 'contactType',
                'name' => 'postalAddress',
                'label' => 'Postal Address',
                'value' => 'POSTAL_ADDRESS'
            ],
            [
                'fieldName' => 'contactType',
                'name' => 'digitalAddress',
                'label' => 'Digital Address',
                'value' => 'DIGITAL_ADDRESS'
            ],
            [
                'fieldName' => 'contactType',
                'name' => 'address',
                'label' => 'Address',
                'value' => 'ADDRESS'
            ],
            [
                'fieldName' => 'contactType',
                'name' => 'socialMediaHandle',
                'label' => 'Social Media Handle',
                'value' => 'SOCIAL_MEDIA_HANDLE'
            ],
            [
                'fieldName' => 'contactType',
                'name' => 'website',
                'label' => 'Website',
                'value' => 'WEBSITE'
            ],
            // EnrollmentStatus
            [
                'fieldName' => 'enrollmentStatus',
                'name' => 'enrolled',
                'label' => 'Enrolled',
                'value' => 'ENROLLED'
            ],
            [
                'fieldName' => 'enrollmentStatus',
                'name' => 'deferred',
                'label' => 'Deferred',
                'value' => 'DEFERRED'
            ],
            [
                'fieldName' => 'enrollmentStatus',
                'name' => 'completed',
                'label' => 'Completed',
                'value' => 'COMPLETED'
            ],
            [
                'fieldName' => 'enrollmentStatus',
                'name' => 'trailed',
                'label' => 'Trailed',
                'value' => 'TRAILED',
            ],
            // FeeType
            [
                'fieldName' => 'feeType',
                'name' => 'schoolFees',
                'label' => 'School Fees',
                'value' => 'SCHOOL_FEES',
            ],
            [
                'fieldName' => 'feeType',
                'name' => 'departmentalFees',
                'label' => 'Departmental Fees',
                'value' => 'DEPARTMENTAL_FEES',
            ],
            [
                'fieldName' => 'feeType',
                'name' => 'srcDues',
                'label' => 'SRC Dues',
                'value' => 'SRC_DUES',
            ],
            // PaymentCycle
            [
                'fieldName' => 'paymentCycle',
                'name' => 'annual',
                'label' => 'Annual',
                'value' => 'ANNUAL',
            ],
            [
                'fieldName' => 'paymentCycle',
                'name' => 'biAnnual',
                'label' => 'BiAnnual',
                'value' => 'BI_ANNUAL',
            ],
            [
                'fieldName' => 'paymentCycle',
                'name' => 'triAnnual',
                'label' => 'TriAnnual',
                'value' => 'TRI_ANNUAL',
            ],
            [
                'fieldName' => 'paymentCycle',
                'name' => 'quarterly',
                'label' => 'Quarterly',
                'value' => 'QUARTERLY',
            ],
            [
                'fieldName' => 'paymentCycle',
                'name' => 'monthly',
                'label' => 'Monthly',
                'value' => 'MONTHLY',
            ],
            [
                'fieldName' => 'paymentCycle',
                'name' => 'weekly',
                'label' => 'Weekly',
                'value' => 'WEEKLY',
            ],
            [
                'fieldName' => 'paymentCycle',
                'name' => 'daily',
                'label' => 'Daily',
                'value' => 'DAILY',
            ],
            [
                'fieldName' => 'paymentCycle',
                'name' => 'oneTime',
                'label' => 'One Time',
                'value' => 'ONE_TIME',
            ],
            [
                'fieldName' => 'paymentCycle',
                'name' => 'payAsYouGo',
                'label' => 'Pay as you go',
                'value' => 'PAY_AS_YOU_GO',
            ],
            // PaymentMethod
            [
                'fieldName' => 'paymentMethod',
                'name' => 'TRANSFLOW',
                'label' => 'TRANSFLOW',
                'value' => 'TRANSFLOW',
            ],
            [
                'fieldName' => 'paymentMethod',
                'name' => 'bankersDraft',
                'label' => 'Bankers Draft',
                'value' => 'BANKERS_DRAFT',
            ],
            [
                'fieldName' => 'paymentMethod',
                'name' => 'cheque',
                'label' => 'Cheque',
                'value' => 'CHEQUE',
            ],
            [
                'fieldName' => 'paymentMethod',
                'name' => 'mobileTransfer',
                'label' => 'mobile Transfer',
                'value' => 'MOBILE_TRANSFER',
            ],
            [
                'fieldName' => 'paymentMethod',
                'name' => 'accountTransfer',
                'label' => 'Account Transfer',
                'value' => 'ACCOUNT_TRANSFER',
            ],
            [
                'fieldName' => 'paymentMethod',
                'name' => 'cashDeposit',
                'label' => 'Cash Deposit',
                'value' => 'CASH_DEPOSIT',
            ],
            [
                'fieldName' => 'paymentMethod',
                'name' => 'cashPayment',
                'label' => 'Cash Payment',
                'value' => 'CASH_PAYMENT',
            ],
            // Bank
            [
                'fieldName' => 'bank',
                'name' => 'GCB',
                'label' => 'Ghana Commercial Bank',
                'value' => 'GCB',
            ],
            [
                'fieldName' => 'bank',
                'name' => 'ADB',
                'label' => 'Agriculture Development Bank',
                'value' => 'ADB',
            ],
            [
                'fieldName' => 'bank',
                'name' => 'ZenithBank',
                'label' => 'Zenith Bank',
                'value' => 'ZENITH',
            ],
            [
                'fieldName' => 'bank',
                'name' => 'CBG',
                'label' => 'Consolidated Banks of Ghana',
                'value' => 'CBG',
            ],
            [
                'fieldName' => 'bank',
                'name' => 'NIB',
                'label' => 'National Investment Bank',
                'value' => 'NIB',
            ],
            [
                'fieldName' => 'bank',
                'name' => 'PrudentialBank',
                'label' => 'Prudential Bank',
                'value' => 'PRUDENTIAL',
            ],
            //ProfileType
            [
                'fieldName' => 'profileType',
                'name' => 'student',
                'label' => 'Student',
                'value' => 'STUDENT',
            ],
            [
                'fieldName' => 'profileType',
                'name' => 'lecturer',
                'label' => 'Lecturer',
                'value' => 'LECTURER',
            ],
            [
                'fieldName' => 'profileType',
                'name' => 'staff',
                'label' => 'Staff',
                'value' => 'STAFF',
            ],
            [
                'fieldName' => 'profileType',
                'name' => 'user',
                'label' => 'User',
                'value' => 'USER',
            ],
            // MaritalStatus
            [
                'fieldName' => 'maritalStatus',
                'name' => 'married',
                'label' => 'Married',
                'value' => 'MARRIED',
            ],
            [
                'fieldName' => 'maritalStatus',
                'name' => 'DIVORCED',
                'label' => 'DIVORCED',
                'value' => 'DIVORCED',
            ],
            [
                'fieldName' => 'maritalStatus',
                'name' => 'separated',
                'label' => 'Separated',
                'value' => 'SEPARATED',
            ],
            [
                'fieldName' => 'maritalStatus',
                'name' => 'single',
                'label' => 'Single',
                'value' => 'SINGLE',
            ],
            [
                'fieldName' => 'maritalStatus',
                'name' => 'engaged',
                'label' => 'Engaged',
                'value' => 'ENGAGED',
            ],
            [
                'fieldName' => 'maritalStatus',
                'name' => 'widow',
                'label' => 'Widow',
                'value' => 'WIDOWER',
            ],
            [
                'fieldName' => 'maritalStatus',
                'name' => 'widower',
                'label' => 'Widower',
                'value' => 'WIDOWER',
            ],
            [
                'fieldName' => 'maritalStatus',
                'name' => 'dating',
                'label' => 'Dating',
                'value' => 'DATING',
            ],
            // AdmissionStatus
            [
                'fieldName' => 'admissionStatus',
                'name' => 'admitted',
                'label' => 'Admitted',
                'value' => 'ADMITTED',
            ],
            [
                'fieldName' => 'admissionStatus',
                'name' => 'graduated',
                'label' => 'Graduated',
                'value' => 'GRADUATED',
            ],
            [
                'fieldName' => 'admissionStatus',
                'name' => 'withdrawn',
                'label' => 'Withdrawn',
                'value' => 'WITHDRAWN',
            ],
            [
                'fieldName' => 'admissionStatus',
                'name' => 'transferred',
                'label' => 'Transferred',
                'value' => 'TRANSFERRED',
            ],
            [
                'fieldName' => 'admissionStatus',
                'name' => 'suspended',
                'label' => 'Suspended',
                'value' => 'SUSPENDED',
            ],
            // TransactionTags
            [
                'fieldName' => 'transactionTags',
                'name' => 'fees',
                'label' => 'Fees',
                'value' => 'FEES',
            ],
            [
                'fieldName' => 'transactionTags',
                'name' => 'dues',
                'label' => 'Dues',
                'value' => 'DUES',
            ],
            [
                'fieldName' => 'transactionTags',
                'name' => 'contributions',
                'label' => 'Contributions',
                'value' => 'CONTRIBUTIONS',
            ],
            [
                'fieldName' => 'transactionTags',
                'name' => 'utility',
                'label' => 'Utility',
                'value' => 'UTILITY',
            ],
            // SemesterType
            [
                'fieldName' => 'semesterType',
                'name' => 'firstSemester',
                'label' => 'First Semester',
                'value' => 'FIRST_SEMESTER',
            ],
            [
                'fieldName' => 'semesterType',
                'name' => 'secondSemester',
                'label' => 'Second Semester',
                'value' => 'SECOND_SEMESTER',
            ],
        ]);


    }
}
