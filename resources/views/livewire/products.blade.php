 <div>
     <div class="field is-grouped">
         <div class="control is-expanded has-icons-left">
             <input class="input" wire:model="search" type="text" placeholder="Find a products...">
             <span class="icon is-left">
                 <i class="fas fa-search"></i>
             </span>
             <p class="help">{{$count}} Products</p>
         </div>
         <div class="control">
             <button class="button is-dark modal-button" target="product-create">
                 <span class="icon-text">
                     <span class="icon">
                         <i class="fas fa-plus"></i>
                     </span>
                     <span>Add Product</span>
                 </span>

                </button>
         </div>
     </div>
     @error('product_qty')
     <div class="notification is-danger">
         <p>{{ $message }}</p>
     </div>
     @enderror
     <!-- Table -->
     <div class="b-table box block">
         <div class="table-wrapper has-mobile-cards has-text-centered">
             <table class="table is-hoverable is-fullwidth">

                 <thead class="is-hidden-touch">
                     <tr>
                         <th>Id</th>
                         <th>Code</th>
                         <th>Bag</th>
                         <th>Box</th>
                         <th>Stock</th>

                         <th class="has-text-centered">Action</th>
                     </tr>
                 </thead>
                 <tfoot class="is-hidden-touch">
                     <tr>
                         <th>Id</th>
                         <th>Code</th>
                         <th>Bag</th>
                         <th>Box</th>
                         <th>Stock</th>

                         <th class="has-text-centered">Action</th>
                     </tr>
                 </tfoot>

                 <tbody>
                     @forelse ($products as $product)
                     <tr class="has-text-centered">
                         <td data-label="Id">{{$product->id}}</td>
                         <td data-label="Code">{{$product->product_code}}</td>
                         <td data-label="Bag">{{$product->product_bag}}</td>
                         <td data-label="Box">{{$product->product_box}}</td>
                         <td data-label="Stock">{{$product->product_stock}}</td>
                         <td data-label="Action" class="is-actions-cell">
                             <form action="{{route('product-moviment',$product->id)}}" id="form_{{$product->id}}"
                                 method="post">
                                 @csrf
                                 @method('PUT')
                                 <div class="field is-grouped">
                                     <div class="control is-expanded">
                                         <input class="input  is-small  has-text-centered" type="number" name="product_qty"
                                             id="product_qty_{{$product->id}}" required>

                                     </div>
                                     <div class="control">
                                         <button class="button is-right is-small is-success" type="submit" name="pick" value="load">
                                             <span class="icon">
                                                 <i class="fas fa-plus"></i>
                                             </span>

                                         </button>
                                     </div>
                                     <div class="control">
                                         <button class="button is-right is-small is-danger" type="submit" name="pick" value="unload">
                                             <span class="icon">
                                                 <i class="fas fa-minus"></i>
                                             </span>

                                         </button>

                                     </div>
                                     <a href="{{route('products.show',$product->id)}}" class="button is-right is-small is-primary">

                                         <span class="icon">
                                             <i class="fas fa-eye"></i>
                                         </span>

                                     </a>
                                 </div>
                             </form>

                         </td>
                     </tr>
                     @empty
                     <tr>
                         <td>No product match with search query!!</td>
                     </tr>
                     @endforelse

                 </tbody>

             </table>
         </div>

         {{$products->links()}}

         <!-- Fine tabella -->
         <div id="product-create" class="modal">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Product Create</p>
                    <button class="modal-delete delete" aria-label="close"></button>
                </header>
                <section class="modal-card-body">
                    <form action="{{route('products.store')}}" method="POST">
                        @csrf
                        <div class="field">
                            <label class="label">Code</label>
                            <div class="control">
                                <input class="input" type="text" name="product_code" id="product_code">
                            </div>
                            @error('product_code')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror

                        </div>
                        <div class="field">
                            <label class="label">Bag</label>
                            <div class="control">
                                <input class="input" type="number" name="product_bag" id="product_bag">
                            </div>
                            @error('product_bag')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="label">Box</label>
                            <div class="control">
                                <input class="input" type="number" name="product_box" id="product_box">
                            </div>
                            @error('product_box')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="label">Stock</label>
                            <div class="control">
                                <input class="input" type="number" name="product_stock" id="product_stock">
                            </div>
                            @error('product_stock')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>


                </section>
                <footer class="modal-card-foot">
                    <div class="field is-grouped">
                        <div class="control">
                            <button type="submit" name="action" value="store_back" class="button is-success ">Carica
                                articolo</button>
                        </div>
                        <div class="control">
                            <button type="submit" name="action" value="store_new" class="button is-link ">Carica e
                                Nuovo</button>
                        </div>
                        <div class="control">
                            <a href="{{route('products.index')}}" class="button is-danger ">Annulla</a>
                        </div>
                    </div>
                </footer>
                </form>
            </div>
        </div>
     </div>
