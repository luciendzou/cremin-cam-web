@extends('index')
@section('content')

<link href="{{ asset('css/product-ext.min.css') }}" rel="stylesheet" type="text/css" />
    <div class="section-header-products">
        <div class="text-head-product">
            <h1>Des Produits pour votre liberté financière</h1>
            <p>Embrassez un avenir où vos choix financiers ne sont plus limités. C'est notre engagement à vous fournir les
                outils et les solutions nécessaires pour prendre le contrôle total de votre argent.</p>

            <a href="#more-products" class="btn-heard-product">En savoir plus <i class="bi bi-arrow-right"></i> </a>
        </div>
        <div class="img-head-product" style="background-image: url({{ asset('images/home/services-1.jpg') }})"></div>
    </div>

    <section class="section_products-uses">
        <div class="padding-global">
          <div class="container-medium">
            <div class="padding-section-small">
              <h3 class="h2-heading text-align-center">Our Financial Solutions</h3>
              <div class="padding-bottom padding-medium"></div>
              <div class="product-country_component">
                <div class="product-country_item">
                    <div class="product-country_icon-wrapper">
                        <img alt="" loading="lazy"
                        src="https://www.svgrepo.com/show/513214/iphone.svg" />
                    </div>
                    <div class="padding-bottom padding-xxsmall"></div>
                    <h3 class="heading-style-h6 is-product">Mobile Banking</h3>
                    <div class="padding-bottom padding-xsmall"></div>
                    <p class="text-size-small text-color-slategrey">Capture all relevant information from customer bank
                      accounts.<br /><br />Returns IBAN, account number, account types, currency and more.</p>
                    <div class="padding-bottom padding-medium"></div><img
                      sizes="(max-width: 479px) 100vw, (max-width: 767px) 84vw, 20vw"
                      srcset="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/650abc8407b3cdde306b8c80_Product%3DAccounts%2C%20Country%3DKSA-p-500.webp 500w, https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/650abc8407b3cdde306b8c80_Product%3DAccounts%2C%20Country%3DKSA.webp 786w"
                      src="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/650abc8407b3cdde306b8c80_Product%3DAccounts%2C%20Country%3DKSA.webp"
                      loading="lazy" alt="user interface showing account details" class="product-country_image" />
                  </div>
                <div class="product-country_item">
                  <div class="product-country_icon-wrapper">
                    <img alt="" loading="lazy"
                      src="https://www.svgrepo.com/show/162217/visa-card.svg" />
                  </div>
                  <div class="padding-bottom padding-xxsmall"></div>
                  <h3 class="heading-style-h6 is-product">Cartes Visa prépayées</h3>
                  <div class="padding-bottom padding-xsmall"></div>
                  <p class="text-size-small text-color-slategrey">Capture all relevant information from customer bank
                    accounts.<br /><br />Returns IBAN, account number, account types, currency and more.</p>
                  <div class="padding-bottom padding-medium"></div><img
                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 84vw, 20vw"
                    srcset="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/650abc8407b3cdde306b8c80_Product%3DAccounts%2C%20Country%3DKSA-p-500.webp 500w, https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/650abc8407b3cdde306b8c80_Product%3DAccounts%2C%20Country%3DKSA.webp 786w"
                    src="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/650abc8407b3cdde306b8c80_Product%3DAccounts%2C%20Country%3DKSA.webp"
                    loading="lazy" alt="user interface showing account details" class="product-country_image" />
                </div>
                <div class="product-country_item">
                  <div class="product-country_icon-wrapper">
                    <img alt="" loading="lazy"
                      src="https://www.svgrepo.com/show/372061/savings.svg" />
                  </div>
                  <div class="padding-bottom padding-xxsmall"></div>
                  <h3 class="heading-style-h6 is-product">Comptes d'Epargnes</h3>
                  <div class="padding-bottom padding-xsmall"></div>
                  <p class="text-size-small text-color-slategrey">Get a real-time view of available balance in customer
                    bank accounts.<br /><br />Refreshes in real-time or per API call set up by client.</p>
                  <div class="padding-bottom padding-medium"></div><img
                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 84vw, 20vw"
                    srcset="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/650abc84a338e7d6eb8f5264_Product%3DBalance%2C%20Country%3DKSA%20%2B%20UAE-p-500.webp 500w, https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/650abc84a338e7d6eb8f5264_Product%3DBalance%2C%20Country%3DKSA%20%2B%20UAE.webp 786w"
                    src="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/650abc84a338e7d6eb8f5264_Product%3DBalance%2C%20Country%3DKSA%20%2B%20UAE.webp"
                    loading="lazy" alt="a chart showing balance information" class="product-country_image" />
                </div>
                <div class="product-country_item">
                  <div class="product-country_icon-wrapper">
                    <img alt="" loading="lazy"
                      src="https://www.svgrepo.com/show/428903/account-balance-cash.svg" />
                  </div>
                  <div class="padding-bottom padding-xxsmall"></div>
                  <h3 class="heading-style-h6 is-product">Ouverture de comptes</h3>
                  <div class="padding-bottom padding-xsmall"></div>
                  <p class="text-size-small text-color-slategrey">Access a clean and standardized view of customers’
                    banking transactions.<br /><br />Returns transactions for the past three years.</p>
                  <div class="padding-bottom padding-medium"></div><img
                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 84vw, 20vw"
                    srcset="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/650abc86104600d28682cb2f_Product%3DTransactions%2C%20Country%3DKSA-p-500.webp 500w, https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/650abc86104600d28682cb2f_Product%3DTransactions%2C%20Country%3DKSA.webp 786w"
                    src="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/650abc86104600d28682cb2f_Product%3DTransactions%2C%20Country%3DKSA.webp"
                    loading="lazy" alt="user interface showing transactions statement" class="product-country_image" />
                </div>
                <div class="product-country_item">
                  <div class="product-country_icon-wrapper">
                    <img alt="" loading="lazy"
                      src="https://www.svgrepo.com/show/239389/stamp-postal.svg" />
                  </div>
                  <div class="padding-bottom padding-xxsmall"></div>
                  <h3 class="heading-style-h6 is-product">Campost money</h3>
                  <div class="padding-bottom padding-xsmall"></div>
                  <p class="text-size-small text-color-slategrey">Capture a list of all the beneficiaries linked to a
                    connected account.<br /><br />Returns an array of the beneficiary name, bank name, IBAN etc.</p>
                  <div class="padding-bottom padding-medium"></div><img
                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 84vw, 20vw"
                    srcset="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/650abc84f47cf01adfd8ba21_Product%3DBeneficiaries%2C%20Country%3DKSA-p-500.webp 500w, https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/650abc84f47cf01adfd8ba21_Product%3DBeneficiaries%2C%20Country%3DKSA.webp 786w"
                    src="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/650abc84f47cf01adfd8ba21_Product%3DBeneficiaries%2C%20Country%3DKSA.webp"
                    loading="lazy" alt="user interface showing user beneficiaries" class="product-country_image" />
                </div>
                <div class="product-country_item">
                  <div class="product-country_icon-wrapper">
                    <img alt="" loading="lazy"
                      src="https://www.svgrepo.com/show/476724/pay.svg" />
                  </div>
                  <div class="padding-bottom padding-xxsmall"></div>
                  <h3 class="heading-style-h6 is-product">Comptes Salaires</h3>
                  <div class="padding-bottom padding-xsmall"></div>
                  <p class="text-size-small text-color-slategrey">Capture a list of all scheduled payments set up on a
                    connected account.<br /><br />Returns an array of scheduled payments, the amounts and the payment
                    dates.</p>
                  <div class="padding-bottom padding-medium"></div><img
                    sizes="(max-width: 479px) 100vw, (max-width: 767px) 84vw, 20vw"
                    srcset="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/65fdbd718ea984f8ced82433_Lean%20Website%202023%20Scheduled%20Payments%20KSA-p-500.webp 500w, https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/65fdbd718ea984f8ced82433_Lean%20Website%202023%20Scheduled%20Payments%20KSA.webp 786w"
                    src="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/65fdbd718ea984f8ced82433_Lean%20Website%202023%20Scheduled%20Payments%20KSA.webp"
                    loading="lazy" alt="a table dates of the week and when payments will be scheduled."
                    class="product-country_image" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section_products-features">
        <div class="padding-global">
            <div class="container-medium">
                <div class="padding-section-medium">
                    <h3 class="heading-style-h1 text-align-center">A faster way to build powerful data tools
                    </h3>
                    <div class="padding-bottom padding-xlarge"></div>
                    <div class="products_features-component">
                        <div id="w-node-eacbe165-c0bb-d8a5-5c8e-18efa7cfc891-a7cfc88c"
                            class="products_features-item">
                            <div class="products_features-icon-wrapper"><img
                                    src="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/63c959bcb32e880478753736_document-text.svg"
                                    loading="lazy" alt="" class="product_features-icon" /></div>
                            <div class="padding-bottom padding-medium"></div>
                            <h2 class="heading-style-h6">Standardized Clean Data</h2>
                            <div class="padding-bottom padding-xxsmall"></div>
                            <div class="padding-bottom padding-xxxsmall"></div>
                            <p class="paragraph-4">No need to worry about different data formats from different
                                banks. We clean
                                and standardize all the data into an easily readable format.<br /></p>
                        </div>
                        <div class="products_features-item">
                            <div class="products_features-icon-wrapper"><img
                                    src="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/63c959aea927a342a556a8de_build.svg"
                                    loading="lazy" alt="" class="product_features-icon" /></div>
                            <div class="padding-bottom padding-medium"></div>
                            <h2 class="heading-style-h6">Data You Can Build On</h2>
                            <div class="padding-bottom padding-xxsmall"></div>
                            <div class="padding-bottom padding-xxxsmall"></div>
                            <p>Our structured data means you can easily build prediction models, risk scoring
                                algorithms and much
                                more.<br /></p>
                        </div>
                        <div class="products_features-item">
                            <div class="products_features-icon-wrapper"><img
                                    src="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/63c959c88c49b506ef570aab_alert-circle.svg"
                                    loading="lazy" alt="" class="product_features-icon" /></div>
                            <div class="padding-bottom padding-medium"></div>
                            <h2 class="heading-style-h6">Minimize AML/Error Risk</h2>
                            <div class="padding-bottom padding-xxsmall"></div>
                            <div class="padding-bottom padding-xxxsmall"></div>
                            <p>Cut the risk of fraud or human error by automatically verifying your customers
                                with account/IBAN
                                information.<br /></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_products-client">
        <div class="padding-global">
            <div class="container-medium">
                <div class="padding-section-small">
                    <div class="products_clients-component">
                        <div class="products_client-content">
                            <div class="heading-style-h1 text-color-white">11x</div>
                            <div class="padding-bottom padding-small"></div>
                            <p class="text-color-white text-size-large">Wally has been able to reduce the
                                average time it takes a
                                user to connect an account by 11X.</p>
                            <div class="padding-bottom padding-small"></div><img
                                src="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/63eef35992f26d7d0dce70e8_Inverted%3DTrue.svg"
                                loading="lazy" alt="wally logo" class="products_client-logo" />
                        </div>
                        <div class="products_client-image-wrapper"><img
                                src="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/63877fbf5e5c12f123b20345_client-phone-image.png"
                                loading="lazy"
                                sizes="(max-width: 479px) 63vw, (max-width: 767px) 38vw, (max-width: 991px) 46vw, 220.25px"
                                srcset="https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/63877fbf5e5c12f123b20345_client-phone-image-p-500.png 500w, https://cdn.prod.website-files.com/63237d47d62ed8840e7cda94/63877fbf5e5c12f123b20345_client-phone-image.png 620w"
                                alt="iphone mockup showing account details" class="products_client-image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
