<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Authenticatable
{
    
    protected $fillable =[
        "user_id",
        "supplier_type",
        "company_name",
        "branch",
        "vat_registration_number",
        "company_certificate",
        "vat_registration_doc",
        "address",
        "country",
        "city",
        "province",
        "amphure",
        "district",
        "postcode",
        "email",
        "contact_name",
        "contact_last_name",
        "phone",
        "facebook_url",
        "google_map_url",
        "is_different_location",
        "bank_account_no",
        "bank_account_name",
        "bank_name",
        "bank_account_type",
        "bank_book_image",
        "personal_first_name",
        "personal_last_name",
        "personal_card_id",
        "personal_card_id_image",
        "personal_house_registration",
        "status_code",
        "is_active",
        "created_by",
        "updated_by"
    ];
    
    
}
