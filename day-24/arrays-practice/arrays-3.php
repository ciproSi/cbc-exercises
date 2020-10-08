<?php
$messages = [
    'error' => [
        'Something went wrong',
        'Something went REALLY wrong',
        'There is no end to this!'
    ],
    'warning' => [
        'This is your first warning',
        'This is your final warning'
    ],
    'success' => [
        'Finally, something was successful.'
    ]
    ];

function do_something_risky() {
    // pretend to do the risky stuff
    
    // return new messages
    return [
        'error' => [
        'I knew this would happen!',
        'This always happens.'
        ],
        'warning' => [
        'You should fix this before proceeding'
        ],
        'success' => []
    ];
    }
    
// let's try it
$new_messages = do_something_risky();

foreach ($new_messages as $msg_type => $msg) {
    foreach ($new_messages[$msg_type] as $msg) {
        array_push($messages[$msg_type], $msg);
    };
};

?>
<style>
    .messages {
        width: 50vw;
        margin: 0 auto;
    }

    .message {
        border: 1px solid tomato;

    }

    .error {
        background-color: red;
        color: white;
    }

    .success {
        background-color: green;
    }

    .warning {
        background-color: orange;
    }
</style>


<div class="messages">
    <?php foreach ($messages as $msg_type => $msg) :?>
        <?php foreach ($messages[$msg_type] as $msg) :?>
            <div class="message <?= $msg_type ?>"><?= $msg ?></div>
    
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>

<!-- <div class="mesagges">
    <?php foreach ($messages as $msg_type => $msg) :?>
        <?php foreach ($msg as $msg) :?>
            <div class="message <?= $msg_type ?>"><?= $msg ?></div>
    
        <?php endforeach; ?>
    <?php endforeach; ?>
</div> -->
