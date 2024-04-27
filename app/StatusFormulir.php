<?php

namespace App;

enum StatusFormulir : string
{
    case PENDING = "pending";
    case REJECTED = 'rejected';
    case SUBMITTED = 'submitted';
    case APPROVED = "approved";
}
