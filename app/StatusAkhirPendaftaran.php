<?php

namespace App;

enum StatusAkhirPendaftaran : string
{
   case PENDING = "pending";
   case REJECTED = 'rejected';
   case ACCPETED = 'accepted';
}
