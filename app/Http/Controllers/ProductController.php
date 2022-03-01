<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductResource::collection(Product::paginate(5));
        // return response()->json([
        //     'status' => 'success',
        //     'data' => $resource
        // ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProdutcsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        try {
            $data = $request->all();
            if ($request->file('image')) {
                $fileName = time() . '_' . str_replace(' ', '_', $request->file('image')->getClientOriginalName());
                $request->file('image')->storeAs('uploads', $fileName);
                $data['image'] = $fileName;
            }
            // $fileName = time() . '_' . str_replace(' ', '_', $request->file('image')->getClientOriginalName());
            // $request->file('image')->storeAs('uploads', $fileName);
            // $data['image'] = $fileName;
            Product::create($data);
            return response()->json([
                'status' => 'success',
                'message' => 'product created',
                'data' => $data
            ], 200);
        } catch (\Exception $ex) {
            return response()->json([
                'status' => 'error',
                'message' => $ex->getMessage()
            ], 405);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProdutcsRequest  $request
     * @param  \App\Models\Produtcs  $produtcs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        try {
            $id = $product->id;
            $data = $request->all();
            if ($request->file('image')) {
                $fileName = time() . '_' . str_replace(' ', '_', $request->file('image')->getClientOriginalName());
                $request->file('image')->storeAs('uploads', $fileName);
                $data['image'] = $fileName;
            }
            $response = Product::find($id);
            if ($response) {
                $response->update($data);
                return response()->json([
                    'status' => 'success',
                    'message' => 'product updated',
                    'data' => $data
                ], 200);
            }
            return response()->json([
                'status' => 'error',
                'message' => 'product not found'
            ], 405);
        } catch (\Exception $ex) {
            return response()->json([
                'status' => 'error',
                'message' => $ex->getMessage()
            ], 405);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produtcs  $produtcs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $response = Product::find($id);
            if ($response) {
                $response->delete();
                return response()->json([
                    'status' => 'success',
                    'message' => 'product deleted'
                ], 200);
            }
            return response()->json([
                'status' => 'error',
                'message' => 'product not found '
            ], 405);
        } catch (\Exception $ex) {
            return response()->json([
                'status' => 'error',
                'message' => $ex->getMessage()
            ], 405);
        }
    }

    /**
     * Show the specified resource from storage.
     *
     * @param  \App\Models\Produtcs  $produtcs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            // return new ProductResource(Product::findOrFail($id));
            $response = Product::find($id);
            if ($response) {
                return new ProductResource($response);
            }
            return response()->json([
                'status' => 'error',
                'message' => 'product not found '
            ], 405);
        } catch (\Exception $ex) {
            return response()->json([
                'status' => 'error',
                'message' => $ex->getMessage()
            ], 405);
        }
    }
}
