<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
/**
 *
 * @OA\Info(
 *
 *      title="es una api",
 *      version="1.5.8",
 *      description="description",
 *     @OA\Contact(
 *      email="tucorreo@correo.com",
 *      name="tu nombre"
 * )
 * )
 *
 *
 */

class ApiProductController extends Controller
{

    /**
     * @OA\Get(
     *      path="/api/products",
     *      tags={"Products"},
     *      summary="Mostrar productos",
     *      @OA\Response(
     *          response=200,
     *          description="mostrar todos los productos"
     *      ),
     *      @OA\Response(
     *          response="default",
     *          description="Ha ocurrido un error")
     *      )
     * )
     */
    public function index()
    {
        return Products::all();
    }

    /**
     * @OA\Get(
     *      path="/api/products/{id}",
     * tags={"Products"},
     *      summary="Contiene un producto especifico por su id",
     *      description="Obtiene un producto especifico por su identificador",
     *          @OA\Parameter(
     *            name="id",
     *            in="path",
     *            required=true,
     *            description="Identificador unico del producto",
     *              @OA\Schema(
     *              type="integer",
     *              format="int64"
     *            )
     *       ),
     *       @OA\Response(
     *       response=200,
     *       description="Producto obtenido exitosamente"
     *   )
     * )
     *
     */
    public function getProductById($id){
        $pro = Products::find($id);
        return response()->json($pro);
    }
    /**
     * @OA\Delete(
     *   path="/api/products/{id}",
     *   tags={"Products"},
     *   summary="Eliminar un producto por identificador",
     *   description="Elimina un producto existente según su identificador",
     *   @OA\Parameter(
     *       name="id",
     *       in="path",
     *       required=true,
     *       description="Identificador único de producto",
     *       @OA\Schema(
     *           type="integer",
     *           format="int64"
     *       )
     *   ),
     *   @OA\Response(
     *       response=200,
     *       description="Producto eliminado exitosamente"
     *   )
     * )
     */
    public function deleteProduct($id)
    {
        $product = Products::find($id);
        $product->delete();
        return response()->json(['message' => 'Producto eliminado exitosamente']);
    }
    /**
 * @OA\PUT(
 *  path="/api/products/{id}",
 *  tags={"Products"},
 *  summary="Editar un producto por identificador",
 *  description="Editar un producto existente",
 *  @OA\Parameter(
 *      name="id",
 *      in="path",
 *      required=true,
 *      description="Identificador único de producto",
 *      @OA\Schema(
 *          type="integer",
 *          format="int64"
 *      )
 *  ),
 *  @OA\RequestBody(
 *      required=true,
 *      @OA\MediaType(
 *          mediaType="application/json",
 *          @OA\Schema(
 *              type="object",
 *              @OA\Property(
 *                  property="cod",
 *                  type="string",
 *                  description="Codigo del producto"
 *              ),
 *              @OA\Property(
 *                  property="desc",
 *                  type="string",
 *                  description="Descripción del producto"
 *              ),
 *              @OA\Property(
 *                  property="sab",
 *                  type="string",
 *                  description="Sabor del producto"
 *              ),
 *              @OA\Property(
 *                  property="pre",
 *                  type="number",
 *                  description="Precio del producto"
 *              ),
 *          )
 *      )
 *  ),
 *  @OA\Response(
 *      response=200,
 *      description="Producto editado exitosamente"
 *  )
 * )
 */
    public function editProduct($id, Request $request)
    {
        $product = Products::find($id);
        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $product->update($request->only(['cod', 'desc', 'sab', 'pre']));
        $product->save();

        $updatedProduct = Products::find($id);

        return response()->json([
            'message' => 'Producto editado exitosamente',
            'product' => $updatedProduct
        ]);
    }

    /**
 * @OA\(
 *  path="/api/products/{id}",
 *  tags={"Products"},
 *  summary="Editar un producto por identificador",
 *  description="Editar un producto existente",
 *  @OA\Parameter(
 *      name="id",
 *      in="path",
 *      required=true,
 *      description="Identificador único de producto",
 *      @OA\Schema(
 *          type="integer",
 *          format="int64"
 *      )
 *  ),
 *  @OA\RequestBody(
 *      required=true,
 *      @OA\MediaType(
 *          mediaType="application/json",
 *          @OA\Schema(
 *              type="object",
 *              @OA\Property(
 *                  property="cod",
 *                  type="string",
 *                  description="Codigo del producto"
 *              ),
 *              @OA\Property(
 *                  property="desc",
 *                  type="string",
 *                  description="Descripción del producto"
 *              ),
 *              @OA\Property(
 *                  property="sab",
 *                  type="string",
 *                  description="Sabor del producto"
 *              ),
 *              @OA\Property(
 *                  property="pre",
 *                  type="number",
 *                  description="Precio del producto"
 *              ),
 *          )
 *      )
 *  ),
 *  @OA\Response(
 *      response=200,
 *      description="Producto editado exitosamente"
 *  )
 * )
 */
}
