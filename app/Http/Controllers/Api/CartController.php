<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\Product;
use App\Repositories\Cart\CartRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = auth('sanctum')->user();

        $items = Cart::with('product')
            ->where('user_id', $user->id)
            ->get();

        return CartResource::collection($items);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => ['required', 'integer', 'exists:products,id'],
            'quantity' => ['nullable', 'integer', 'min:1'],
        ]);

        $user = auth('sanctum')->user();
        $quantity = $request->input('quantity', 1);

        $cart = Cart::where('user_id', $user->id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($cart) {

            $cart->quantity += $quantity;
            $cart->save();
        } else {
            // Cart::create([
            //     'user_id' => $user->id,
            //     'product_id' => $request->product_id,
            //     'quantity' => $quantity,
            // ]);
        }

        return response()->json([
            'message' => 'Item added to cart!',
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => ['required', 'integer', 'min:1'],
        ]);

        $user = auth('sanctum')->user();

        $cart = Cart::where('user_id', $user->id)
            ->where('id', $id)
            ->firstOrFail();

        $cart->update([
            'quantity' => $request->quantity,
        ]);

        return response()->json([
            'message' => 'Cart updated!',
        ]);
    }

    public function destroy($id)
    {
        $user = auth('sanctum')->user();

        $cart = Cart::where('user_id', $user->id)
            ->where('id', $id)
            ->firstOrFail();

        $cart->delete();

        return response()->json([
            'message' => 'Item removed from cart!',
        ]);
    }

    public function empty()
    {
        $user = auth('sanctum')->user();

        Cart::where('user_id', $user->id)->delete();

        return response()->json([
            'message' => 'Cart emptied!',
        ]);
    }

    public function total()
    {
        $user = auth('sanctum')->user();

        $total = Cart::where('user_id', $user->id)
            ->with('product')
            ->get()
            ->sum(fn($item) => $item->product->price * $item->quantity);

        return response()->json([
            'total' => $total,
        ]);
    }
}
