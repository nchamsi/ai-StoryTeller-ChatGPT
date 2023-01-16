
# ai-StoryTeller-ChatGPT

Symfony webApp utilisant l'API d'OpenAi ChatGPT-3 pour générer des histoires pour enfants.




## API Reference

#### Utilisation de l'API Open-AI PHP

  https://github.com/orhanerday/open-ai

## Demo

http://ai-storyteller.herokuapp.com/
  
Générateur d'une histoire classique pour enfants avec éléments au choix et/ou une histoire alternative par la suite (avec une leçon de vie à la fin).


## Environment Variables

Pour utiliser l'application, vous devez ajouter la variable d'environnement dans le fichier .env ou .env.local que vous trouverez dans vos paramètres de compte d'Open-AI.

`OPENAI_API_KEY="sk-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"`

ainsi que dans services.yaml
```
parameters:
    OPENAI_API_KEY: '%env(OPENAI_API_KEY)%'
```


## Support

Si questions, email jessicakuijer@me.com .

