@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')    
@endsection
       
@section('page')
     
 <main class="badge-content step-2">

              <div class="badge-title badge-title--content-page">
                  <div class="badge-title__letter c swing-1"></div>
                  <div class="badge-title__letter o swing-2"></div>
                  <div class="badge-title__letter l swing-3"></div>
                  <div class="badge-title__letter l swing-4"></div>
                  <div class="badge-title__letter a swing-5"></div>
                  <div class="badge-title__letter b swing-1"></div>
                  <div class="badge-title__letter o swing-3"></div>
                  <div class="badge-title__letter r swing-2"></div>
                  <div class="badge-title__letter a swing-4"></div>
                  <div class="badge-title__letter t swing-5"></div>
                  <div class="badge-title__letter i swing-1"></div>
                  <div class="badge-title__letter o swing-2"></div>
                  <div class="badge-title__letter n swing-3"></div>
              </div>

      
      
      <div class="step">Step 2 of 4</div>
      
         <div class="body-text staggered-entry">
         
         <h1>Content Management Systems</h1>
         
         <h2 class="visuallyhidden">The team</h2>
          
          <p>Collaboration is an effective way to build the best possible product. Individuals or teams of experts, with their own specialisms, working together can be much more effective than one person or team trying to do everything.</p>
          <p>Let’s look at the different roles that are needed to run your e-commerce website.</p>
          
         </div><!--/body-text-->
         
         <div class="newspaper staggered-entry">
         <span class="page"></span> 
             <span class="page"></span> 
             <span class="page"></span> 
             <span class="page"></span> 
         <div class="jobs">
             
             
             <div class="job-list">
             
             <div class="job-flex">
            <div class="job">
            <h3>Marketing Manager</h3> 
            <p>Your marketing department is responsible for the visual appearance of your website, the messages on the graphics that promote your products and your regular promotional emails to users that have subscribed.</p>
            </div>

            <div class="job">
            <h3>Products Content Manager</h3>
            <p>Your products team make sure that new products are added to the website, old ones are removed and that product descriptions and photography are accurate. They also need to keep an eye on the stock level to make sure popular products are replenished.</p>
            </div>

            <div class="job">
            <h3>Accountant</h3>
            <p>Your accounts team need access to all orders generated, as well as customer refunds.</p>
            </div>

            <div class="job">
            <h3>Warehouse and Fulfilment Manager</h3>
            <p>Your fulfilment team needs access to the orders generated. They also need the ability to increase stock levels when new stock arrives at the warehouse.</p>
            </div>
            
            <div class="job">
            <h3>SEO Officer</h3>
            <p>The SEO (Search Engine Optimisation) team need to make sure the site uses all the right keywords to rank highly in search engines. They can do this by optimising meta tags and the text on product pages.</p>
            </div>
            
            <div class="job job--dummy"><span class="dummy-headline"></span><span class="dummy-line"></span><span class="dummy-line"></span><span class="dummy-line"></span></div>
            
             </div><!--/job-list-->
             </div>
         </div><!--/jobs-->
         </div>
         
<div class="candidate-holder">
<div class="body-text staggered-entry">
<h2>Select your team members</h2>

<p>Fill your team. Read through the descriptions from the recruitment consultant below and offer jobs to the best people for each role.</p>

<div class="candidate-list">
<div class="candidate">
  
    <?php $name = 'Kayleigh'; $number = 1; ?>
   
    <h3>Kayleigh Marlon <span class="candidate-status jsCandidateStatus">Available</span></h3>
    
    <div class="candidate-content hide">
    <p>A designer at a national agency for 10 years, Kayleigh specialises in unique visuals and problem solving through design. Kayleigh is looking for a new challenge where she can develop her digital design skills.</p>
    <p>Would <?php echo $name;?> suit any of the roles you have available?</p>
    <div class="candidate-actions">
        <a href="#offer<?php echo $number; ?>" class="btn-offer jsOfferJob">Offer Job</a>
        <a href="#offer<?php echo $number; ?>" class="btn-dont-offer jsDontOfferJob" data-answer="true">Don't Offer Job</a>
    </div>


    <div class="candidate-outcome candidate-offer-wrong hide">
            <h3 class="candidate-label candidate-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
            <p>Are you sure? Whilst Kayleigh has a strong CV, she is not right for any of the roles you have available. She is interested in a design role. Try again.</p>
    </div>
    
    <div class="candidate-outcome candidate-offer-right hide">
            <h3 class="candidate-label candidate-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
            <p>That's right. Whilst Kayleigh has a strong CV, she is not right for any of the roles you have available. She is interested in a design role.</p>
    </div>


    
    </div>

</div>

<div class="candidate">
  
    <?php $name = 'Donnie';
    $number = 2;
    ?>
   
    <h3>Donnie Westbrook <span class="candidate-status jsCandidateStatus">Available</span></h3>
    <div class="candidate-content hide">
    <p>A marketing graduate, Donnie has worked for a major online retailer’s marketing department for the last two years. He is now looking to relocate, so is looking for a new opportunity.</p>
    <p>Would <?php echo $name;?> suit any of the roles you have available?</p>
    <div class="candidate-actions">
        <a href="#offer<?php echo $number; ?>" class="btn-offer jsOfferJob" data-answer="true">Offer Job</a>
        <a href="#offer<?php echo $number; ?>" class="btn-dont-offer jsDontOfferJob">Don't Offer Job</a>
    </div>

   <div class="offer<?php echo $number; ?>">
    <div class="candidate-positions hide">
       <p>Which role would you like to offer <?php echo $name;?>?</p>
        <a href="#answer<?php echo $number; ?>" class="js-marketing-manager" data-answer="true">Marketing Manager</a>
        <a href="#answer<?php echo $number; ?>" class="js-products-content-manager">Products Content Manager</a>
        <a href="#answer<?php echo $number; ?>" class="js-accountant">Accountant</a>
        <a href="#answer<?php echo $number; ?>" class="warehouse-manager">Warehouse & Fulfilment Manager</a>
        <a href="#answer<?php echo $number; ?>" class="seo-officer">SEO Officer</a>
    </div>
    </div>
    
    <div class="candidate-outcome candidate-offer-wrong hide">
            <h3 class="candidate-label candidate-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
            <p>Are you sure? Look again at Donnie's skills. There might be a role for him in your team.</p>
    </div>
    
   <div id="answer<?php echo $number; ?>">
        <div class="candidate-outcome candidate-right hide">
            <h3 class="candidate-label candidate-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
            <p>Donnie will be a great addition to the marketing team.</p>
        </div>

        <div class="candidate-outcome candidate-wrong hide">
            <h3 class="candidate-label candidate-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
            <p>Perhaps not for this role, but with that experience there is definitely a place for Donnie. Try another role, paying particular attention to his areas of expertise.</p>
        </div>
        
        
    </div>
    
    </div>

</div>

<div class="candidate">
  
    <?php $name = 'Amanda'; $number = 3; ?>
   
    <h3>Amanda Bell <span class="candidate-status jsCandidateStatus">Available</span></h3>
    <div class="candidate-content hide">
    <p>Amanda is a graduate with an MA in Search Engine Technology. With experience as a freelancer whilst at university, she specialises in keyword analysis and writing copy for search engines.</p>
    <p>Would <?php echo $name;?> suit any of the roles you have available?</p>
    <div class="candidate-actions">
        <a href="#offer<?php echo $number; ?>" class="btn-offer jsOfferJob" data-answer="true">Offer Job</a>
        <a href="#offer<?php echo $number; ?>" class="btn-dont-offer jsDontOfferJob">Don't Offer Job</a>
    </div>

   <div class="offer<?php echo $number; ?>">
    <div class="candidate-positions hide">
       <p>Which role would you like to offer <?php echo $name;?>?</p>
        <a href="#answer<?php echo $number; ?>" class="js-marketing-manager">Marketing Manager</a>
        <a href="#answer<?php echo $number; ?>" class="js-products-content-manager">Products Content Manager</a>
        <a href="#answer<?php echo $number; ?>" class="js-accountant">Accountant</a>
        <a href="#answer<?php echo $number; ?>" class="warehouse-manager">Warehouse & Fulfilment Manager</a>
        <a href="#answer<?php echo $number; ?>" class="seo-officer" data-answer="true">SEO Officer</a>
    </div>
    </div>
    
    <div class="candidate-outcome candidate-offer-wrong hide">
            <h3 class="candidate-label candidate-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
            <p>Are you sure? Look again at Amanda's skills. There might be a role for her in your team.</p>
    </div>

   <div id="answer3">
        <div class="candidate-outcome candidate-right hide">
            <h3 class="candidate-label candidate-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
            <p>Amanda definitely has the skills that we need for our SEO team.</p>
        </div>

        <div class="candidate-outcome candidate-wrong hide">
            <h3 class="candidate-label candidate-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
            <p>Perhaps not for this role, but with that experience there is definitely a place for <?php echo $name; ?>. Try another role, paying particular attention to his areas of expertise.</p>
        </div>
        
        
    </div>
    </div>

</div>


<div class="candidate">
  
    <?php $name = 'Mikey'; $number = 4; ?>
   
    <h3>Mikey Atwater <span class="candidate-status jsCandidateStatus">Available</span></h3>
    <div class="candidate-content hide">
    <p>Mikey is a talented product tester. Specialising in quality assurance, he is well versed in the latest quality standards and regulations. Mikey is a valuable addition to anyone that produces products.</p>
    <p>Would <?php echo $name;?> suit any of the roles you have available?</p>
    <div class="candidate-actions">
        <a href="#offer<?php echo $number; ?>" class="btn-offer jsOfferJob">Offer Job</a>
        <a href="#offer<?php echo $number; ?>" class="btn-dont-offer jsDontOfferJob" data-answer="true">Don't Offer Job</a>
    </div>

    <div class="candidate-outcome candidate-offer-wrong hide">
            <h3 class="candidate-label candidate-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
            <p>We don’t have a role that suits Mikey at the moment. His expertise lies in the testing of products, whereas we need someone that can add products to our website.</p>
    </div>
    
    <div class="candidate-outcome candidate-offer-right hide">
            <h3 class="candidate-label candidate-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
            <p>Good call. We don’t have a role that suits Mikey at the moment. His expertise lies in the testing of products, whereas we need someone that can add products to our website.</p>
    </div>


    
    </div>

</div>

<div class="candidate">
  
    <?php $name = 'Emma'; $number = 5; ?>
   
    <h3>Emma Porter <span class="candidate-status jsCandidateStatus">Available</span></h3>
    
    <div class="candidate-content hide">
    <p>Emma is a product buyer with over ten years' experience at various major e-commerce websites. From seasonal clothing stock, to planning merchandise lines for major events like the Olympics, Emma has done it all and would be a great addition to any retail team.</p>
    <p>Would <?php echo $name;?> suit any of the roles you have available?</p>
    <div class="candidate-actions">
        <a href="#offer<?php echo $number; ?>" class="btn-offer jsOfferJob">Offer Job</a>
        <a href="#offer<?php echo $number; ?>" class="btn-dont-offer jsDontOfferJob" data-answer="true">Don't Offer Job</a>
    </div>


    
    <div class="candidate-outcome candidate-offer-wrong hide">
            <h3 class="candidate-label candidate-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
            <p>Are you sure? Unfortunately we don’t have a role that fits Emma’s skillset. We need someone to manage the content about products rather than source products.</p>
    </div>
    
    <div class="candidate-outcome candidate-offer-right hide">
            <h3 class="candidate-label candidate-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
            <p>You're right. Unfortunately we don’t have a role that fits Emma’s skillset. We need someone to manage the content about products rather than source products.</p>
    </div>


    </div>

</div>

<div class="candidate">
  
    <?php $name = 'Noah'; $number = 6; ?>
   
    <h3>Noah Lane <span class="candidate-status jsCandidateStatus">Available</span></h3>
    <div class="candidate-content hide">
    <p>A certified fork-lift driver, Noah has four years' experience in warehouses loading deliveries for a reasonably sized e-retailer. He is confident, positive and has a keen attention to detail and would be a valuable addition to any warehouse.</p>
    <p>Would <?php echo $name;?> suit any of the roles you have available?</p>
    <div class="candidate-actions">
        <a href="#offer<?php echo $number; ?>" class="btn-offer jsOfferJob">Offer Job</a>
        <a href="#offer<?php echo $number; ?>" class="btn-dont-offer jsDontOfferJob" data-answer="true">Don't Offer Job</a>
    </div>
    
    <div class="candidate-outcome candidate-offer-wrong hide">
            <h3 class="candidate-label candidate-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
            <p>Are you sure? Noah clearly knows his way around a warehouse. Unfortunately, he doesn’t have any experience in the running of the warehouse and the fulfilment of orders, so is probably not right for a role at this time.</p>
    </div>
    
    <div class="candidate-outcome candidate-offer-right hide">
            <h3 class="candidate-label candidate-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
            <p>Spot on. Noah clearly knows his way around a warehouse. Unfortunately, he doesn’t have any experience in the running of the warehouse and the fulfilment of orders, so is probably not right for a role at this time.</p>
    </div>


    </div>

</div>

<div class="candidate">
  
    <?php $name = 'Claire'; $number = 6; ?>
   
    <h3>Claire Marlowe <span class="candidate-status jsCandidateStatus">Available</span></h3>
    <div class="candidate-content hide">
    <p>Claire has worked as a Warehouse Manager for a number of years for a large paper producer. Experienced in inventory management and delivery fulfilment, she is a great communicator who could serve as a valuable bridge between the warehouse and management.</p>
    <p>Would <?php echo $name;?> suit any of the roles you have available?</p>
    <div class="candidate-actions">
        <a href="#offer<?php echo $number; ?>" class="btn-offer jsOfferJob" data-answer="true">Offer Job</a>
        <a href="#offer<?php echo $number; ?>" class="btn-dont-offer jsDontOfferJob">Don't Offer Job</a>
    </div>

   <div class="offer<?php echo $number; ?>">
    <div class="candidate-positions hide">
       <p>Which role would you like to offer <?php echo $name;?>?</p>
        <a href="#answer<?php echo $number; ?>" class="js-marketing-manager">Marketing Manager</a>
        <a href="#answer<?php echo $number; ?>" class="js-products-content-manager">Products Content Manager</a>
        <a href="#answer<?php echo $number; ?>" class="js-accountant">Accountant</a>
        <a href="#answer<?php echo $number; ?>" class="warehouse-manager" data-answer="true">Warehouse & Fulfilment Manager</a>
        <a href="#answer<?php echo $number; ?>" class="seo-officer">SEO Officer</a>
    </div>
    </div>
    
    <div class="candidate-outcome candidate-offer-wrong hide">
            <h3 class="candidate-label candidate-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
            <p>Are you sure? Claire has some skills that could be very useful in our team.</p>
    </div>
    
   <div id="answer<?php echo $number; ?>">
        <div class="candidate-outcome candidate-right hide">
            <h3 class="candidate-label candidate-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
            <p>Claire sounds perfect for the role of Warehouse & Fulfilment Manager.</p>
        </div>

        <div class="candidate-outcome candidate-wrong hide">
            <h3 class="candidate-label candidate-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
            <p>Perhaps not for this role, but with that experience there is definitely a place for <?php echo $name; ?>. Try another role, paying particular attention to her areas of expertise.</p>
        </div>
        
        
    </div>
    </div>

</div>
          
<div class="candidate">
  
    <?php $name = 'Pete'; $number = 7; ?>
   
    <h3>Pete Ross <span class="candidate-status jsCandidateStatus">Available</span></h3>
    <div class="candidate-content hide">
    <p>Pete is a qualified accountant with an enthusiasm for balancing the books. Knowledgeable about accounts receivable, tax concepts and account balance reconciliation in businesses of all scales. Pete is an energetic and well-presented individual who would be a great addition to any accounts team.</p>
    <p>Would <?php echo $name;?> suit any of the roles you have available?</p>
    <div class="candidate-actions">
        <a href="#offer<?php echo $number; ?>" class="btn-offer jsOfferJob" data-answer="true">Offer Job</a>
        <a href="#offer<?php echo $number; ?>" class="btn-dont-offer jsDontOfferJob">Don't Offer Job</a>
    </div>

   <div class="offer<?php echo $number; ?>">
    <div class="candidate-positions hide">
       <p>Which role would you like to offer <?php echo $name;?>?</p>
        <a href="#answer<?php echo $number; ?>" class="js-marketing-manager">Marketing Manager</a>
        <a href="#answer<?php echo $number; ?>" class="js-products-content-manager">Products Content Manager</a>
        <a href="#answer<?php echo $number; ?>" class="js-accountant" data-answer="true">Accountant</a>
        <a href="#answer<?php echo $number; ?>" class="warehouse-manager">Warehouse & Fulfilment Manager</a>
        <a href="#answer<?php echo $number; ?>" class="seo-officer">SEO Officer</a>
    </div>
    </div>
    
    <div class="candidate-outcome candidate-offer-wrong hide">
            <h3 class="candidate-label candidate-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
            <p>Are you sure? Pete has some skills that could be very useful in our team.</p>
    </div>
    

   <div id="answer<?php echo $number; ?>">
        <div class="candidate-outcome candidate-right hide">
            <h3 class="candidate-label candidate-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
            <p>Looks like Pete is just what we need for the Accounts team.</p>
        </div>

        <div class="candidate-outcome candidate-wrong hide">
            <h3 class="candidate-label candidate-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
            <p>Perhaps not for this role, but with that experience there is definitely a place for <?php echo $name; ?>. Try another role, paying particular attention to his areas of expertise.</p>
        </div>
        
        
    </div>
    </div>
</div>
         
<div class="candidate">
  
    <?php $name = 'Muhammad'; $number = 8; ?>
   
    <h3>Muhammad Patel <span class="candidate-status jsCandidateStatus">Available</span></h3>
    <div class="candidate-content hide">
    <p>Muhammed has written for national newspapers for 25 years, as well as feature articles for global publications. Winner of Journalist of the Year two years in a row, Muhammed is a creative, committed and enthusiastic worker.</p>
    <p>Would <?php echo $name;?> suit any of the roles you have available?</p>
    <div class="candidate-actions">
        <a href="#offer<?php echo $number; ?>" class="btn-offer jsOfferJob">Offer Job</a>
        <a href="#offer<?php echo $number; ?>" class="btn-dont-offer jsDontOfferJob" data-answer="true">Don't Offer Job</a>
    </div>


    <div class="candidate-outcome candidate-offer-wrong hide">
            <h3 class="candidate-label candidate-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
            <p>Are you sure? Sounds like Muhammad can definitely write, but he doesn’t seem to have the knowledge about Search Engine Optimisation that we need.</p>
    </div>
    
    <div class="candidate-outcome candidate-offer-right hide">
            <h3 class="candidate-label candidate-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
            <p>That's the right decision. Sounds like Muhammad can definitely write, but he doesn’t seem to have the knowledge about Search Engine Optimisation that we need.</p>
    </div>


    </div>
</div>
          
<div class="candidate">
  
    <?php $name = 'Vasundhara'; $number = 9; ?>
   
    <h3>Vasundhara Ikin <span class="candidate-status jsCandidateStatus">Available</span></h3>
    <div class="candidate-content hide">
    <p>Vasundhara has worked as a website content manager for a large Estate Agent for 6 years. Her responsibilities included updating property details and inventory on the website as well as organising and selecting property photography. An enthusiastic and versatile worker, she is looking for a fresh challenge and is particularly interested in being involved in online retail.</p>
    <p>Would <?php echo $name;?> suit any of the roles you have available?</p>
    <div class="candidate-actions">
        <a href="#offer<?php echo $number; ?>" class="btn-offer jsOfferJob" data-answer="true">Offer Job</a>
        <a href="#offer<?php echo $number; ?>" class="btn-dont-offer jsDontOfferJob">Don't Offer Job</a>
    </div>

   <div class="offer<?php echo $number; ?>">
    <div class="candidate-positions hide">
       <p>Which role would you like to offer <?php echo $name;?>?</p>
        <a href="#answer<?php echo $number; ?>" class="js-marketing-manager">Marketing Manager</a>
        <a href="#answer<?php echo $number; ?>" class="js-products-content-manager" data-answer="true">Products Content Manager</a>
        <a href="#answer<?php echo $number; ?>" class="js-accountant">Accountant</a>
        <a href="#answer<?php echo $number; ?>" class="warehouse-manager">Warehouse & Fulfilment Manager</a>
        <a href="#answer<?php echo $number; ?>" class="seo-officer">SEO Officer</a>
    </div>
    </div>
    
    <div class="candidate-outcome candidate-offer-wrong hide">
            <h3 class="candidate-label candidate-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
            <p>Are you sure? <?php echo $name; ?> has some skills that could be very useful in our team.</p>
    </div>

   <div id="answer<?php echo $number; ?>">
        <div class="candidate-outcome candidate-right hide">
            <h3 class="candidate-label candidate-label--right"><span class="visuallyhidden">Right!</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/tick-icon.png" alt="" /></h3>
            <p>Although she hasn’t worked in e-commerce before, it sounds like Vasundhara certainly has the skills that we need for our Products role.</p>
        </div>

        <div class="candidate-outcome candidate-wrong hide">
            <h3 class="candidate-label candidate-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
            <p>Perhaps not for this role, but with her skills there is definitely a place for <?php echo $name; ?>. Try another role, paying particular attention to her areas of expertise.</p>
        </div>
        
        
    </div>
    </div>
</div>
          

</div>

          
          </div><!--/jobs-->
          </div><!--/candidate-holder-->
          
          <div class="jsJobsFilled cms-systems hide">
          
          <div class="body-text staggered-entry">
          
          <h2>Well done!</h2>
            <p>You’ve managed to put together a decent team there.</p>
            <p>But how are all of these different people wanting to do different things with the website going to work together without getting in each other's way?</p>
            <p>That’s where a <strong>Content Management System (CMS)</strong> comes in.</p>
            <p>Content management systems allow you to develop scalable, customisable websites which can fulfil a number of roles. Let's look at a few of these.</p>
          </div>
          
          <div class="software-type software-type--with-strengths-weaknesses software-type--squarespace staggered-entry">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/squarespace-logo.png" alt="" class="software-type-logo" />
              <h3 class="software-type-title">Squarespace</h3>
              <p>Squarespace is an online website builder. It allows people and companies to create and edit a website very quickly.</p>
              
              <div class="strengths-and-weaknesses">
              
                  <div class="strength-or-weakness strength-or-weakness--strengths">
                      <h4>Strengths</h4>
                      <ul>
                          <li>Quick and easy to get a web presence</li>
                          <li>Well designed templates</li>
                      </ul>
                  </div>
                  
                  <div class="strength-or-weakness strength-or-weakness--weakness">
                      <h4>Weaknesses</h4>
                      <ul>
                          <li>Restricted by the templates available</li>
                          <li>No customisation</li>
                      </ul>
                  </div>
              
              </div><!--/strengths-and-weaknesses-->
          
          </div>
          
          <div class="software-type software-type--with-strengths-weaknesses software-type--wordpress staggered-entry">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/wordpress-logo.png" alt="" class="software-type-logo" />
              <h3 class="software-type-title">Wordpress</h3>
              <p>Wordpress is a free and open-source content management system allowing people to create blogs and websites that they can edit themselves.</p>
              
              <div class="strengths-and-weaknesses">
              
                  <div class="strength-or-weakness strength-or-weakness--strengths">
                      <h4>Strengths</h4>
                      <ul>
                      <li>Lots of themes available for little money</li>
                      <li>Lots of plugins and extensions available to allow you to do pretty much anything</li>
                      <li>Can be customised</li>

                      </ul>
                  </div>
                  
                  <div class="strength-or-weakness strength-or-weakness--weakness">
                      <h4>Weaknesses</h4>
                      <ul>
                      <li>Needs a developer to customise if there is not a plugin that does what you want</li>
                      <li>Primarily a blog system - other functionalities have been bolted on</li>
                      <li>Plugins can become out of date when Wordpress releases an update</li>

                      </ul>
                  </div>
              
              </div><!--/strengths-and-weaknesses-->
          
          </div>
          
          
          
          <div class="software-type software-type--with-strengths-weaknesses software-type--joomla staggered-entry">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/joomla-logo.png" alt="" class="software-type-logo" />
              <h3 class="software-type-title">Joomla</h3>
              <p>Joomla is another free and open-source content management system that allows people/companies to control the content of their website.</p>
              
              <div class="strengths-and-weaknesses">
              
                  <div class="strength-or-weakness strength-or-weakness--strengths">
                      <h4>Strengths</h4>
                      <ul>
                      <li>Large community that can help with issues</li>
                      <li>Can be customised to do what you want</li>
                      </ul>
                  </div>
                  
                  <div class="strength-or-weakness strength-or-weakness--weakness">
                      <h4>Weaknesses</h4>
                      <ul>
                      <li>Needs a developer to customise if there is not a plugin or extension that does what you want</li>
                      <li>E-commerce is an add-on as Joomla is not primarily for building e-commerce websites. </li>

                      </ul>
                  </div>
              
              </div><!--/strengths-and-weaknesses-->
          
          </div>
          
          <div class="software-type software-type--with-strengths-weaknesses software-type--shopify staggered-entry">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/shopify-logo.png" alt="" class="software-type-logo" />
              <h3 class="software-type-title">Shopify</h3>
              <p>An e-commerce focused Content Management System on Shopify’s own servers.</p>
              
              <div class="strengths-and-weaknesses">
              
                  <div class="strength-or-weakness strength-or-weakness--strengths">
                      <h4>Strengths</h4>
                      <ul>
                      <li>A tried and trusted e-commerce solution maintained by Shopify</li>
                      <li>Create a functioning shop very quickly</li>

                      </ul>
                  </div>
                  
                  <div class="strength-or-weakness strength-or-weakness--weakness">
                      <h4>Weaknesses</h4>
                      <ul>
                      <li>Functionality cannot be customised</li>
                      <li>Templates can be restrictive and complex</li>
                      </ul>
                  </div>
              
              </div><!--/strengths-and-weaknesses-->
          
          </div>
          
          <div class="software-type software-type--with-strengths-weaknesses software-type--magento staggered-entry">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/magento-logo.png" alt="" class="software-type-logo" />
              <h3 class="software-type-title">Magento</h3>
              <p>An open-source free e-commerce system that has everything an online shop needs.</p>
              
              <div class="strengths-and-weaknesses">
              
                  <div class="strength-or-weakness strength-or-weakness--strengths">
                      <h4>Strengths</h4>
                      <ul>
                      <li>Very customisable if you have a developer</li>
                      <li>Lots of plugins and extensions available</li>
                      <li>Good for large scale shops</li>
                      <li>Strong Search Engine Optimisation</li>
                      </ul>
                  </div>
                  
                  <div class="strength-or-weakness strength-or-weakness--weakness">
                      <h4>Weaknesses</h4>
                      <ul>
                      <li>Developer is definitely required</li>
                      <li>Can be complex to install</li>
                      <li>Can be slow if not on the right server</li>
                      <li>Homepage cannot be easily customised</li>

                      </ul>
                  </div>
              
              </div><!--/strengths-and-weaknesses-->
          
          </div>
          
          <div class="body-text staggered-entry">
          
          <h2>Which CMS?</h2>
            <p>Which CMS would be the most appropriate for you e-commerce site; this is your checklist:</p>
            <ul>
            <li>Customisable</li>
            <li>E-commerce focused</li>
            <li>Strong SEO (Search Engine Optimisation) Tools</li>
            </ul>
            
            <ul class="cms-choice">
            <li><a href="#cmsChosen"><img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/squarespace-logo.png" alt="" /></a></li>
            <li><a href="#cmsChosen"><img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/wordpress-logo.png" alt="" /></a></a></li>
            <li><a href="#cmsChosen"><img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/joomla-logo.png" alt="" /></a></a></li>
            <li><a href="#cmsChosen"><img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/shopify-logo.png" alt="" /></a></a></li>
            <li><a href="#cmsChosen" data-answer="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/magento-logo.png" alt="" /></a></a></li>
            </ul>
            
            <div class="cms-outcome jsWrongCms hide">
                <h3 class="cms-label cms-label--wrong"><span class="visuallyhidden">Wrong</span><img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/cross-icon.png" alt="" /></h3>
                <p>Are you sure? Check the requirements and the Strenths and Weaknesses of each CMS again.</p>
            </div>

          </div>
          
          
          
          </div>
          
          
          <div class="jsCmsChosen sections-quiz hide" id="cmsChosen">
          
              <div class="body-text staggered-entry">
              <h2>Good choice!</h2>
              <p class="site-section-intro">Great. So you have your CMS, now to make sure that your team can do their jobs. What sections of the site should they have access to:</p>
              
              <div class="site-section-person" id="siteSectionPerson1">
              <div class="site-section-person-image"><img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/donnie.jpeg" alt="" /></div>
              <h3 class="site-section-title">Donnie, Marketing Manager</h3>
              <p>Your Marketing Manager is responsible for the visual appearance of your website, the messages on the graphics that promote your products and your regular promotional emails to users that have subscribed</p>
              <p>Looking at the job description, what two areas will Donnie primarily need access to?</p>
              <fieldset class="site-sections">
                <?php $roles = 1; ?>
                  <legend class="visuallyhidden">Site sections</legend>
                  <p><input type="checkbox" id="invoices<?php echo $roles; ?>" data-checked="false" /> <label for="invoices<?php echo $roles; ?>">Invoices</label></p>
                  <p><input type="checkbox" id="subscriberEmails<?php echo $roles; ?>" data-checked="true" /> <label for="subscriberEmails<?php echo $roles; ?>">List of subscriber emails</label></p>
                  <p><input type="checkbox" id="orders<?php echo $roles; ?>" data-checked="false" /> <label for="orders<?php echo $roles; ?>">Orders</label></p>
                  <p><input type="checkbox" id="productDetails<?php echo $roles; ?>" data-checked="false" /> <label for="productDetails<?php echo $roles; ?>">Product Details</label></p>
                  <p><input type="checkbox" id="seoTools<?php echo $roles; ?>" data-checked="false" /> <label for="seoTools<?php echo $roles; ?>">SEO Tools</label></p>
                  <p><input type="checkbox" id="sitePromotions<?php echo $roles; ?>" data-checked="true" /> <label for="sitePromotions<?php echo $roles; ?>">Site Promotions</label></p>
                  <p><input type="checkbox" id="stockLevels<?php echo $roles; ?>" data-checked="false" /> <label for="stockLevels<?php echo $roles; ?>">Stock Levels</label></p>
              </fieldset>
              
              <p><a href="#siteSectionsOutcome<?php echo $roles; ?>" class="site-section-btn">Apply access settings</a></p>
              
              <div class="site-sections-outcome site-sections-outcome--wrong hide">              
              <p>Not quite. Remember as a Marketing Manager is responsible for the visual appearance of your website, the messages on the graphics that <strong>promote your products</strong> and your regular promotional <strong>emails to users that have subscribed</strong>. Try again.</p>              
              </div>
              <div class="site-sections-outcome site-sections-outcome--right hide">              
              <p>Good. Scroll on for Amanda...</p>              
              </div>
              
              
              </div><!--/site-section-person-->
              
              <?php $roles = 2; ?>
              <div class="site-section-person hide" id="siteSectionPerson<?php echo $roles; ?>">
              <div class="site-section-person-image"><img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/amanda.jpg" alt="" /></div>
              <h3 class="site-section-title">Amanda, SEO Officer</h3>
              <p>The SEO (Search Engine Optimisation) team need to make sure the site uses all the right keywords to rank highly in search engines. They can do this by optimising meta tags and the text on product pages.</p>
              <p>Looking at the job description, what two areas will Amanda primarily need access to?</p>
              <fieldset class="site-sections">
                
                  <legend class="visuallyhidden">Site sections</legend>
                  <p><input type="checkbox" id="invoices<?php echo $roles; ?>" data-checked="false" /> <label for="invoices<?php echo $roles; ?>">Invoices</label></p>
                  <p><input type="checkbox" id="subscriberEmails<?php echo $roles; ?>" data-checked="false" /> <label for="subscriberEmails<?php echo $roles; ?>">List of subscriber emails</label></p>
                  <p><input type="checkbox" id="orders<?php echo $roles; ?>" data-checked="false" /> <label for="orders<?php echo $roles; ?>">Orders</label></p>
                  <p><input type="checkbox" id="productDetails<?php echo $roles; ?>" data-checked="true" /> <label for="productDetails<?php echo $roles; ?>">Product Details</label></p>
                  <p><input type="checkbox" id="seoTools<?php echo $roles; ?>" data-checked="true" /> <label for="seoTools<?php echo $roles; ?>">SEO Tools</label></p>
                  <p><input type="checkbox" id="sitePromotions<?php echo $roles; ?>" data-checked="false" /> <label for="sitePromotions<?php echo $roles; ?>">Site Promotions</label></p>
                  <p><input type="checkbox" id="stockLevels<?php echo $roles; ?>" data-checked="false" /> <label for="stockLevels<?php echo $roles; ?>">Stock Levels</label></p>
              </fieldset>
              
              <p><a href="#siteSectionsOutcome<?php echo $roles; ?>" class="site-section-btn">Apply access settings</a></p>
              
              <div class="site-sections-outcome site-sections-outcome--wrong hide">              
              <p>Not quite. The <strong>SEO (Search Engine Optimisation) team</strong> need to make sure the site uses all the right keywords to rank highly in search engines. They can do this by optimising meta tags and the <strong>text on product pages</strong>. Try again.</p>              
              </div>
              <div class="site-sections-outcome site-sections-outcome--right hide">              
              <p>Good. Scroll on for Claire...</p>              
              </div>
              
              
              </div><!--/site-section-person-->
              
              <?php $roles = 3; ?>
              <div class="site-section-person hide" id="siteSectionPerson<?php echo $roles; ?>">
              <div class="site-section-person-image"><img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/claire.jpg" alt="" /></div>
              <h3 class="site-section-title">Claire, Warehouse and Fulfilment Manager</h3>
              <p>Your fulfilment team need access to the orders generated, as well as the ability to increase stock levels when new stock arrives at the warehouse.</p>
              <p>Looking at the job description, what two areas will Claire primarily need access to?</p>
              <fieldset class="site-sections">
                
                  <legend class="visuallyhidden">Site sections</legend>
                  <p><input type="checkbox" id="invoices<?php echo $roles; ?>" data-checked="false" /> <label for="invoices<?php echo $roles; ?>">Invoices</label></p>
                  <p><input type="checkbox" id="subscriberEmails<?php echo $roles; ?>" data-checked="false" /> <label for="subscriberEmails<?php echo $roles; ?>">List of subscriber emails</label></p>
                  <p><input type="checkbox" id="orders<?php echo $roles; ?>" data-checked="true" /> <label for="orders<?php echo $roles; ?>">Orders</label></p>
                  <p><input type="checkbox" id="productDetails<?php echo $roles; ?>" data-checked="false" /> <label for="productDetails<?php echo $roles; ?>">Product Details</label></p>
                  <p><input type="checkbox" id="seoTools<?php echo $roles; ?>" data-checked="false" /> <label for="seoTools<?php echo $roles; ?>">SEO Tools</label></p>
                  <p><input type="checkbox" id="sitePromotions<?php echo $roles; ?>" data-checked="false" /> <label for="sitePromotions<?php echo $roles; ?>">Site Promotions</label></p>
                  <p><input type="checkbox" id="stockLevels<?php echo $roles; ?>" data-checked="true" /> <label for="stockLevels<?php echo $roles; ?>">Stock Levels</label></p>
              </fieldset>
              
              <p><a href="#siteSectionsOutcome<?php echo $roles; ?>" class="site-section-btn">Apply access settings</a></p>
              
              <div class="site-sections-outcome site-sections-outcome--wrong hide">              
              <p>Not quite. Your fulfilment team need access to the <strong>orders generated</strong>, as well as the ability to increase <strong>stock levels</strong> when new stock arrives at the warehouse. Try again.</p>              
              </div>
              <div class="site-sections-outcome site-sections-outcome--right hide">              
              <p>Good. Scroll on for Pete...</p>              
              </div>
              
              
              </div><!--/site-section-person-->
              
              <?php $roles = 4; ?>
              <div class="site-section-person hide" id="siteSectionPerson<?php echo $roles; ?>">
              <div class="site-section-person-image"><img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/pete.jpg" alt="" /></div>
              <h3 class="site-section-title">Pete, Accounts</h3>
              <p>Your accounts team need access to all orders generated to send invoices.</p>
              <p>Looking at the job description, what two areas will Pete primarily need access to?</p>
              <fieldset class="site-sections">
                
                  <legend class="visuallyhidden">Site sections</legend>
                  <p><input type="checkbox" id="invoices<?php echo $roles; ?>" data-checked="true" /> <label for="invoices<?php echo $roles; ?>">Invoices</label></p>
                  <p><input type="checkbox" id="subscriberEmails<?php echo $roles; ?>" data-checked="false" /> <label for="subscriberEmails<?php echo $roles; ?>">List of subscriber emails</label></p>
                  <p><input type="checkbox" id="orders<?php echo $roles; ?>" data-checked="true" /> <label for="orders<?php echo $roles; ?>">Orders</label></p>
                  <p><input type="checkbox" id="productDetails<?php echo $roles; ?>" data-checked="false" /> <label for="productDetails<?php echo $roles; ?>">Product Details</label></p>
                  <p><input type="checkbox" id="seoTools<?php echo $roles; ?>" data-checked="false" /> <label for="seoTools<?php echo $roles; ?>">SEO Tools</label></p>
                  <p><input type="checkbox" id="sitePromotions<?php echo $roles; ?>" data-checked="false" /> <label for="sitePromotions<?php echo $roles; ?>">Site Promotions</label></p>
                  <p><input type="checkbox" id="stockLevels<?php echo $roles; ?>" data-checked="false" /> <label for="stockLevels<?php echo $roles; ?>">Stock Levels</label></p>
              </fieldset>
              
              <p><a href="#siteSectionsOutcome<?php echo $roles; ?>" class="site-section-btn">Apply access settings</a></p>
              
              <div class="site-sections-outcome site-sections-outcome--wrong hide">              
              <p>Not quite. Your accounts team need access to all <strong>orders generated</strong> to send <strong>invoices</strong>. Try again.</p>              
              </div>
              <div class="site-sections-outcome site-sections-outcome--right hide">              
              <p>Good. Scroll on for Arsundhara...</p>              
              </div>
              
              
              </div><!--/site-section-person-->
              
              <?php $roles = 5; ?>
              <div class="site-section-person hide" id="siteSectionPerson<?php echo $roles; ?>">
              <div class="site-section-person-image"><img src="/badge-assets/{{$url['slug']}}/_global/img/step-2/arsundhara.jpg" alt="" /></div>
              <h3 class="site-section-title">Arsundhara, Product Content Manager</h3>
              <p>Your products team makes sure that new products are added to the website, old ones are removed and that product descriptions and photography are accurate. They also need to keep an eye on the stock level to make sure popular products are replenished.</p>
              <p>Looking at the job description, what two areas will Arsundhara primarily need access to?</p>
              <fieldset class="site-sections">
                
                  <legend class="visuallyhidden">Site sections</legend>
                  <p><input type="checkbox" id="invoices<?php echo $roles; ?>" data-checked="false" /> <label for="invoices<?php echo $roles; ?>">Invoices</label></p>
                  <p><input type="checkbox" id="subscriberEmails<?php echo $roles; ?>" data-checked="false" /> <label for="subscriberEmails<?php echo $roles; ?>">List of subscriber emails</label></p>
                  <p><input type="checkbox" id="orders<?php echo $roles; ?>" data-checked="false" /> <label for="orders<?php echo $roles; ?>">Orders</label></p>
                  <p><input type="checkbox" id="productDetails<?php echo $roles; ?>" data-checked="true" /> <label for="productDetails<?php echo $roles; ?>">Product Details</label></p>
                  <p><input type="checkbox" id="seoTools<?php echo $roles; ?>" data-checked="false" /> <label for="seoTools<?php echo $roles; ?>">SEO Tools</label></p>
                  <p><input type="checkbox" id="sitePromotions<?php echo $roles; ?>" data-checked="false" /> <label for="sitePromotions<?php echo $roles; ?>">Site Promotions</label></p>
                  <p><input type="checkbox" id="stockLevels<?php echo $roles; ?>" data-checked="true" /> <label for="stockLevels<?php echo $roles; ?>">Stock Levels</label></p>
              </fieldset>
              
              <p><a href="#siteSectionsOutcome<?php echo $roles; ?>" class="site-section-btn">Apply access settings</a></p>
              
              <div class="site-sections-outcome site-sections-outcome--wrong hide">              
              <p>Not quite. Your products team make sure that new <strong>products</strong> are added to the website, old ones are removed and that product descriptions and photography are accurate. They also need to keep an eye on <strong>stock level</strong> to make sure popular products are replenished. Try again.</p>              
              </div>
              <div class="site-sections-outcome site-sections-outcome--right hide">              
              <p>Great stuff. Scroll on...</p>              
              </div>
              
              
              </div><!--/site-section-person-->
              
              
              </div><!--/body-text-->
          
          
          </div>
          
          
          
          
          
          
          
          <div class="jsNextStep hide page-complete page-complete--step2">
          
          <div class="body-text staggered-entry">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/well-done.png" alt="" class="well-done" />
          <h2 class="visuallyhidden">Well done!</h2>
          <p>You have the team, and you have the tools – you've put together an effective combination</p>
          <p>In the next step, we’ll have a look at some of the systems that exist to aid collaboration.</p>
          
          <p class="next-step"><a href="{{$links['next']}}" class="btn btn--primary">Next step</a></p>
          </div>
          
          </div>
          
       


       
    </main>

@endsection


@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 2);
    oBadges.redirectIfPreviousStepNotCompleted(1, '{{$links['last']}}');
</script>

<script>
var badgeTitleWidth = 920,
    viewportWidth = $(window).width(),
    transformScale;
    
    if(badgeTitleWidth > (viewportWidth - 100)) {
        transformScale = (viewportWidth-100) / badgeTitleWidth;
        $('.badge-title').css('transform','scale('+transformScale+')').css('width','300%').css('margin-left','-100%');
    } else {
    $('.badge-title').css('transform','scale(1)');
    }
    
    $( window ).resize(function() {
        var badgeTitleWidth = 920,
    viewportWidth = $(window).width(),
    transformScale;
    
    if(badgeTitleWidth > (viewportWidth - 100)) {
        transformScale = (viewportWidth-100) / badgeTitleWidth;
        $('.badge-title').css('transform','scale('+transformScale+')').css('width','300%').css('margin-left','-100%');
    } else {
    $('.badge-title').css('transform','scale(1)');
    }
    });

</script>

<script>

var rightAnswers = 0,
    currentQuestion = 1;
$( ".jsOfferJob" ).click(function() {
    var answer = $(this).data('answer');
    $(this).closest('.candidate').find('.candidate-offer-wrong').addClass('hide');
    if(answer === true) {
        $(this).closest('.candidate-actions').addClass('disabled').find('.jsDontOfferJob').addClass('faded');
        $(this).closest('.candidate').find('.candidate-positions').removeClass('hide');
    } else {
        $(this).closest('.candidate').find('.candidate-offer-wrong').removeClass('hide');
    }
});
$( ".jsDontOfferJob" ).click(function() {
    var answer = $(this).data('answer');
    $(this).closest('.candidate').find('.candidate-offer-wrong').addClass('hide');
    if(answer === true) {
        $(this).closest('.candidate-actions').addClass('disabled').find('.jsOfferJob').addClass('faded');
        $(this).closest('.candidate').addClass('candidate-rejected').find('.jsCandidateStatus').text('Rejected');
        $(this).closest('.candidate').find('.candidate-offer-right').removeClass('hide');
        rightAnswers++;
        checkAnswers();
    } else {
        $(this).closest('.candidate').find('.candidate-offer-wrong').removeClass('hide');
    }
});
$( ".candidate-positions a" ).click(function() {
    var answer = $(this).data('answer');
    $(this).closest('.candidate').find('.candidate-wrong').addClass('hide');
    if(answer === true) {
        $(this).closest('.candidate-positions').addClass('disabled');
        $(this).closest('.candidate').find('.candidate-right').removeClass('hide');
        $(this).closest('.candidate').addClass('candidate-offered').find('.jsCandidateStatus').text($(this).text());
        var jobRole = $(this).attr('class');
        $('.'+jobRole).addClass('role-filled');
        rightAnswers++;
        checkAnswers();
    } else {
        $(this).closest('.candidate').find('.candidate-wrong').removeClass('hide');
    }
});

$( ".candidate h3" ).click(function() {
    $(this).toggleClass('expanded');
    $(this).closest('.candidate').find('.candidate-content').toggleClass('hide');
});
    
function checkAnswers() {
     if(rightAnswers == 10) {
         $('.jsJobsFilled').removeClass('hide');
     }
}

$( ".cms-choice a" ).click(function() {
    $('.jsWrongCms').addClass('hide');
    var answer = $(this).data('answer');
    if(answer === true) {
        $('.jsCmsChosen').removeClass('hide');
    } else {
        $('.jsWrongCms').removeClass('hide');
        return false;
    }

});

var siteSection = 1;
$( ".site-section-btn" ).click(function() {

    $( "#siteSectionPerson"+siteSection+" .site-sections-outcome--wrong" ).addClass('hide');

    var rightAnswers = 0;
    var wrongAnswers = 0;
    $( "#siteSectionPerson"+siteSection+" input" ).each(function( index ) {
        var answer = $(this).data('checked');
        if($(this).is(":checked")) {
            if(answer === true) {
                rightAnswers++;
            } else {
                wrongAnswers++;
            }
        } else {
            if(answer === false) {
                rightAnswers++;
            } else {
                wrongAnswers++;
            }
        }
        
        
        
    });
    
    if(rightAnswers === 7) {
        $( "#siteSectionPerson"+siteSection+" .site-sections-outcome--right" ).removeClass('hide');
        siteSection++;
        if(siteSection > 5){
            $('.jsNextStep').removeClass('hide');
            oBadges.stepCompleted();
        } else {
            $( "#siteSectionPerson"+siteSection).removeClass('hide');
        }
    } else {
        $( "#siteSectionPerson"+siteSection+" .site-sections-outcome--wrong" ).removeClass('hide');
    }
    
});

</script>

@endsection