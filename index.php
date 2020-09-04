<?php

    $faqList = [
     'dialogs' => [
       [
        'question' => 'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?',
        'answer' => 'The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person s name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive.'
      ],
      [
        'question' => 'How does Google protect my privacy and keep my information secure?',
        'answer' => 'We know that security and privacy are important to you - and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.'
      ],
      [
        'question' => 'How can I remove information about myself from Google’s search results?',
        'answer' => 'Google search results are a reflection of the content publicly available on the web. Search engines can t remove content directly from websites, so removing search results from Google wouldn t remove the content from the web. '
      ],
      [
        'question' => 'Are my search queries sent to websites when I click on Google Search results?',
        'answer' => 'In some cases, yes. When you click on a search result in Google Search, your web browser may also send the Internet address, or URL, of the search results page to the destination web page as the Referrer URL.'
      ]
    ]
  ];

  $dialogs = $faqList['dialogs'];
?>

<section style="padding:80px 25%">
 <?php
    foreach ($dialogs as $dialog) {
    ?>
      <h1 class:"question"> <?php echo $dialog['question']; ?> </h1>
      <p class: "answer"> <?php echo $dialog['answer']; ?> <a href="https://policies.google.com/faq">See more..</a> </p>
    <?php
    }
  ?>
</section>
