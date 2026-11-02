<?php

namespace App\Enums;

enum InvoiceLineType: string

{
    case Plan = 'plan';
    case Proration = 'proration';
    case Overage = 'overage';
}
