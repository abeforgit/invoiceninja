<?php
/**
 * Invoice Ninja (https://invoiceninja.com)
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2020. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://opensource.org/licenses/AAL
 */

namespace App\Designs;

class Business extends AbstractDesign
{
    public function __construct()
    {
    }

    public function includes()
    {
        return '<title>$number</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="$app_url/css/tailwind-1.2.0.css" rel="stylesheet">

<style>
    body { font-size:90% }
    @page
    {
        size: auto;
        margin-top: 5mm;
    }
    thead th:first-child {
        border-top-left-radius: 0.5rem;
    }
    thead th:last-child {
        border-top-right-radius: 0.5rem;
    }
.table_header_thead_class { border-top-left-radius: .5rem; text-align: left }
.table_header_td_class { color: white; padding: .5rem 1rem; font-weight: 800; background-color: #2a4365; }
.table_body_td_class { color: #c05621; padding: 1rem; border-width: 4px; border-color: white; background-color: white; }

</style>';
    }

    public function header()
    {
        return '<div class="m-10">
<div class="grid grid-cols-6 gap-1">
    <div class="col-span-2 p-3">
        $company_logo
    </div>
    <div class="col-span-2 p-3 flex flex-col">
        $company_details
    </div>
    <div class="col-span-2 p-3 flex flex-col">
        $company_address
    </div>
</div>';
    }

    public function body()
    {
        return '<div class="grid grid-cols-12 gap-1 mt-8">
    <div class="col-span-7 p-3 flex flex-col">
        $client_details
    </div>
    <div class="col-span-5 p-3 flex flex-col bg-orange-600 px-4 py-4 h-auto rounded-lg">
        <div class="flex flex-col text-white">
            $entity_details
        </div>
    </div>
</div>

<table class="w-full table-auto mt-20">
    <thead class="text-left">
        $product_table_header
    </thead>
    <tbody class="bg-gray-200">
        $product_table_body
    </tbody>
</table>
<table class="w-full table-auto mt-20">
    <thead class="text-left">
        $task_table_header
    </thead>
    <tbody class="bg-gray-200">
        $task_table_body
    </tbody>
</table>';
    }

    public function task()
    {
        return '';
    }

    public function product()
    {
        return '';
    }

    public function footer()
    {
        return '<div class="flex items-center justify-between px-4 pb-4 bg-gray-200 rounded py-2">
<div class="w-1/2">
    <div class="flex flex-col">
        <p>$entity.public_notes</p>
    </div>
</div>
<div class="w-1/3 flex flex-col">
    <div class="flex px-3 mt-2">
        <section class="w-1/2 text-right flex flex-col">
            $discount_label
            $total_tax_labels
            $line_tax_labels
        </section>
        <section class="w-1/2 text-right flex flex-col">
            $discount
            $total_tax_values
            $line_tax_values
        </section>
    </div>
</div>
</div>
<div class="flex items-center justify-between mt-4 pb-4 px-4">
<div class="w-1/2">
    <div class="flex flex-col">
        <p class="font-semibold">$terms_label</p>
        <p>$terms</p>
    </div>
</div>
<div class="flex w-2/5 flex-col">
    <section class="flex py-2 bg-blue-900 px-4 py-3 rounded text-white">
        <p class="w-1/2">$balance_due_label</p>
        <p class="text-right w-1/2">$balance_due</p>
    </section>
</div>
</div>
</div>
</body>
</html>';
    }
}
