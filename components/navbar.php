<?php
$homeURL = '/php-feedback-activity/index.php';
$feedbackURL = '/php-feedback-activity/feedback.php';
$aboutURL = '/php-feedback-activity/about.php';


echo
"
<nav class=\"navbar navbar-expand-sm navbar-light bg-light mb-4\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"#\">Kodego SP404</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
        <ul class=\"navbar-nav ms-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"$homeURL\">Home</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"$feedbackURL\">Feedback</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"$aboutURL\">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
";
