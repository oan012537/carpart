<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
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
        "bank_branch",
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

<<<<<<< HEAD
    public function brand()
=======
    public function Province()
>>>>>>> ff9e3bc25ffb0d6331fdf5d950476ab2915e044a
    {
    	return $this->belongsTo('App\Models\Province', 'province');
    }

<<<<<<< HEAD
=======
    public function Amphure()
    {
    	return $this->belongsTo('App\Models\Amphure', 'amphure');
    }

    public function District()
    {
    	return $this->belongsTo('App\Models\District', 'district');
    }
>>>>>>> ff9e3bc25ffb0d6331fdf5d950476ab2915e044a
    
    
}
