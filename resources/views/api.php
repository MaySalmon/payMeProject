<?php
                                use Illuminate\Support\Facades\Http;
                                $response = Http::post('https://preprod.paymeservice.com/api/generate-sale', [
                                        'seller_payme_id' => 'MPL14985-68544Z1G-SPV5WK2K-0WJWHC7N',

                                    'sale_price' => '12300',

                                    'currency' => 'ILS',

                                    'product_name' => 'Shirt',

                                    'installments' => '1',

                                    'language' => 'en'

                                ]);

                                

                                $obj = json_decode($response->body());

                                echo $obj->sale_url . "<br>";

                                echo $obj->payme_sale_id . "<br>";

                                echo $obj->currency . "<br>";

 

                                ?>