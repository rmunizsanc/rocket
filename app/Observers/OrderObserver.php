<?php

namespace App\Observers;

use App\Models\Orders;

class OrderObserver
{
    /**
     * Handle the Orders "created" event.
     *
     * @param  \App\Models\Orders  $orders
     * @return void
     */
    public function created(Orders $orders)
    {
        //
    }

    /**
     * Handle the Orders "updated" event.
     *
     * @param  \App\Models\Orders  $orders
     * @return void
     */
    public function updated(Orders $orders)
    {
        if ($orders->isDirty('paid') && $orders->paid) {
            // NOTIFICATION DE PAGO
        }

        // STATUS=3 ENVIADO
        if ($orders->isDirty('status') && $orders->status == '3') {
            // NOTIFICATION DE ENVIO
        }
    }

    /**
     * Handle the Orders "deleted" event.
     *
     * @param  \App\Models\Orders  $orders
     * @return void
     */
    public function deleted(Orders $orders)
    {
        //
    }

    /**
     * Handle the Orders "restored" event.
     *
     * @param  \App\Models\Orders  $orders
     * @return void
     */
    public function restored(Orders $orders)
    {
        //
    }

    /**
     * Handle the Orders "force deleted" event.
     *
     * @param  \App\Models\Orders  $orders
     * @return void
     */
    public function forceDeleted(Orders $orders)
    {
        //
    }
}
