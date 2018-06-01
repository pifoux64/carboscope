var botName = "Carboscope",
botAvatar = "",
conversationData = {"homepage": {1: { "statement": [ 
"Salut ! Mon nom est Carboscope, je suis le propriétaire de ce site et j’aimerais vous aider.", 
"J’ai juste quelques questions.", 
"Quel est votre prénom ?", 
], "input": {"name": "name", "consequence": 1.2}},1.2:{"statement": function(context) {return [ 
"Nice to meet you here, " + context.name  + "!", 
"Comme vous pouvez le voir, notre site Internet va bientôt sortir.", 
"Je sais, il vous tarde de le voir mais nous avons besoin de quelques jours de plus pour le fignoler.", 
"Voudriez-vous être parmi les premiers à le voir ?", 
];},"options": [{ "choice": "Dites-m’en plus","consequence": 1.4},{ 
"choice": "Barbant","consequence": 1.5}]},1.4: { "statement": [ 
"Cool ! Veuillez laisser votre adresse e-mail ici et je vous enverrai un message lorsque c’est prêt.", 
], "email": {"email": "email", "consequence": 1.6}},1.5: {"statement": function(context) {return [ 
"Vous m’en voyez déçu, " + context.name  + " :( À bientôt…", 
];}},1.6: { "statement": [ 
"Parfait ! Merci et à bientôt !", 
"Bonne journée !", 
]}}};