<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // database/migrations/xxxx_create_orders_table.php

public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->decimal('total', 10, 2);
        $table->string('status')->default('en_attente'); // en_attente, payé, expédié, annulé
        $table->timestamps();
    });
}
public function user()
{
    return $this->belongsTo(User::class);
    // Une commande appartient à un utilisateur
}

public function items()
{
    return $this->hasMany(OrderItem::class);
    // Une commande contient plusieurs produits
}

}
