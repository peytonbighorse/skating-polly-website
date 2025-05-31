<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact | Skating Polly</title>
    <link rel="stylesheet" href="styles/base.css" />
    <link rel="stylesheet" href="styles/typography.css" />
    <link rel="stylesheet" href="styles/layout.css" />
    <link rel="stylesheet" href="styles/components.css" />
    <link rel="stylesheet" href="styles/modals.css" />
    <link rel="stylesheet" href="styles/contact.css" />
  </head>
  <body>
    <?php include("includes/header.php"); ?>
    <?php include("includes/modals.php"); ?>
    <div class="contact-page">
      <h1 class="contact-heading">♥ Contact Us ♥</h1>
      <div class="contact-list-container">
        <ul class="contact-list">
          <li class="contact-link">
            <a
              href="mailto:margie@doitbooking.com"
              class="north-american-booking"
              >North American Booking</a
            >
          </li>
          <li class="contact-link">
            <a href="mailto:gijs@sedate-bookings.com" class="euro-uk-booking"
              >UK / European Booking</a
            >
          </li>
          <li class="contact-link">
            <a href="mailto:syncteam@terrorbird.com" class="sync-team"
              >Sync Licensing
            </a>
          </li>
        </ul>

        <h3>Something else?</h3>
        <iframe
          class="google-contact-form"
          src="https://docs.google.com/forms/d/e/1FAIpQLSdXMxLbKfOQXhexLNg87uVzRO86aP_fTu8X_7dgmpbdQ5s_Qg/viewform?embedded=true"
          frameborder="0"
          marginheight="0"
          marginwidth="0"
          >Loading…</iframe
        >
      </div>
    </div>

    <script src="javascript/modals.js"></script>
  </body>
</html>
