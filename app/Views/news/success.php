<a style="align-items: center; text-decoration: none; font-weight: bolder; font-size: 20px; color: deepskyblue; display: flex; flex-direction: column;" href="<?php redirect()->to('/news'); ?>">&#10005; </a>

<div style="width: fit-content; justify-content: center; display: flex; border: 2px solid #e4f4f4; padding: 50px 100px; margin: auto; background-color: #f6f6f6;">
    <div style="align-items: center; color: green; display: flex; flex-direction: column;">
        <h1><?= esc($message);?></h1>
    
        <div style="border-radius: 50%; border: 3px solid green; padding: 20px; width: 70%">
            
            <span style="font-size: 50px; text-align: center; align-items: center; display: flex; flex-direction: column; color: green">&#x2714;</span>
        </div>
    </div>
</div>