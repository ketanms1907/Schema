Schema:
1.Organization
<script type="application/ld+json"> 
{ "@context" : "http://schema.org",
  "@type" : "Organization",
  "legalName" : "Site Name",
  "name":"Site Name",
  "url" : "<?php echo bloginfo('url')?>",
  "contactPoint" : [{
    "@type" : "ContactPoint",
    "telephone" : "",
    "contactType" : "customer support"
  }],
  "logo" : "<?php echo get_template_directory_uri(); ?>/images/logo.png",
   "sameAs" : [ "https://plus.google.com/",
    "https://www.facebook.com/",
    "https://twitter.com/",
    "https://www.instagram.com/",
    "https://www.youtube.com/"]
}
</script>
2.WebSite
<script WebSitetype="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "WebSite", 
  "name" : "Site Name",
  "url" : "<?php echo bloginfo('url')?>",
  "potentialAction" : {
    "@type" : "SearchAction",
    "target": "<?php echo bloginfo('url')?>/?s={search_term_string}",
    "query-input": "required name=search_term_string"
  }                     
}
</script>
3.PostalAddress
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "PostalAddress",
  "streetAddress": "The Bungalow",
  "addressLocality": "Bircher",
  "addressRegion": "Herefordshire",
  "postalCode": "HR6 0BS"  
}
</script>
