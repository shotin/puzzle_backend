<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;
use App\Models\Word;

class WordSeeder extends Seeder
{
    public function run()
    {
        $words = [
            'POLITICS' => [
                'election', 'senate', 'government', 'policy', 'diplomacy', 'campaign', 'debate', 'congress', 'legislation', 'candidate',
                'republican', 'democrat', 'independent', 'voter', 'ballot', 'primary', 'caucus', 'incumbent', 'lobbyist', 'activist',
                'platform', 'agenda', 'coalition', 'bipartisan', 'mandate', 'constituent', 'pundit', 'partisan', 'gerrymander', 'lawmaker',
                'referendum', 'federalism', 'jurisdiction', 'regulation', 'sovereignty', 'bureaucracy', 'executive', 'judiciary', 'legislative',
                'cabinet', 'convention', 'council', 'district', 'governor', 'mayor', 'policy', 'summit', 'treaty', 'accord'
            ],
            'FINANCE' => [
                'investment', 'bank', 'stock', 'market', 'capital', 'asset', 'liability', 'dividend', 'interest', 'portfolio',
                'mutual', 'fund', 'bond', 'currency', 'exchange', 'inflation', 'deflation', 'recession', 'economy', 'finance',
                'credit', 'debit', 'equity', 'yield', 'return', 'risk', 'hedge', 'broker', 'trader', 'investor',
                'venture', 'capitalist', 'loan', 'mortgage', 'debt', 'savings', 'account', 'check', 'balance', 'profit',
                'loss', 'cash', 'flow', 'budget', 'tax', 'revenue', 'expenditure', 'expense', 'audit', 'ledger'
            ],
            'CRYPTO' => [
                'bitcoin', 'blockchain', 'cryptocurrency', 'decentralized', 'ethereum', 'mining', 'wallet', 'transaction', 'hash', 'node',
                'token', 'smart', 'contract', 'ledger', 'ICO', 'deFi', 'altcoin', 'fork', 'fiat', 'exchange',
                'wallet', 'private', 'key', 'public', 'key', 'encryption', 'mining', 'hash', 'rate', 'proof', 'stake',
                'proof', 'work', 'dApp', 'stablecoin', 'gas', 'fees', 'governance', 'protocol', 'block', 'reward',
                'cold', 'storage', 'hot', 'wallet', 'airdrop', 'staking', 'consensus', 'scalability', 'sharding', 'lightning'
            ],
            'ENTERTAINMENT' => [
                'movie', 'music', 'celebrity', 'actor', 'actress', 'director', 'producer', 'concert', 'festival', 'award',
                'television', 'radio', 'broadcast', 'media', 'theater', 'show', 'performance', 'album', 'song', 'single',
                'playlist', 'streaming', 'service', 'platform', 'event', 'venue', 'audience', 'fan', 'merchandise', 'ticket',
                'interview', 'promotion', 'trailer', 'clip', 'scene', 'script', 'casting', 'crew', 'production', 'box',
                'office', 'ratings', 'reviews', 'critics', 'genre', 'biopic', 'documentary', 'animation', 'blockbuster', 'indie'
            ],
            'MUSIC' => [
                'guitar', 'piano', 'drums', 'violin', 'trumpet', 'saxophone', 'flute', 'cello', 'bass', 'vocals',
                'melody', 'harmony', 'rhythm', 'beat', 'tempo', 'chord', 'scale', 'lyrics', 'songwriter', 'composer',
                'band', 'orchestra', 'choir', 'ensemble', 'performance', 'concert', 'gig', 'tour', 'album', 'single',
                'track', 'record', 'studio', 'label', 'producer', 'mixing', 'mastering', 'synthesizer', 'sample', 'loop',
                'jam', 'session', 'rehearsal', 'audition', 'genre', 'cover', 'remix', 'original', 'hit', 'classic'
            ],
            'ART' => [
                'painting', 'sculpture', 'drawing', 'sketch', 'illustration', 'portrait', 'landscape', 'abstract', 'realism', 'impressionism',
                'cubism', 'surrealism', 'expressionism', 'installation', 'conceptual', 'art', 'digital', 'photography', 'printmaking', 'collage',
                'ceramics', 'textiles', 'fashion', 'design', 'graphic', 'typography', 'calligraphy', 'gallery', 'museum', 'exhibition',
                'curator', 'artist', 'studio', 'workshop', 'canvas', 'easel', 'palette', 'brush', 'medium', 'technique',
                'composition', 'perspective', 'color', 'theory', 'form', 'line', 'shape', 'texture', 'space', 'balance'
            ],
            'FANTASY' => [
                'dragon', 'wizard', 'magic', 'spell', 'sword', 'castle', 'kingdom', 'elf', 'dwarf', 'orc',
                'troll', 'fairy', 'goblin', 'witch', 'warlock', 'knight', 'hero', 'villain', 'quest', 'adventure',
                'myth', 'legend', 'folklore', 'prophecy', 'enchanted', 'forest', 'realm', 'portal', 'beast', 'creature',
                'sorcery', 'alchemy', 'potion', 'charm', 'curse', 'runestone', 'artifact', 'grimoire', 'summon', 'guardian',
                'realm', 'ancient', 'realm', 'mystic', 'oracle', 'seeker', 'ranger', 'champion', 'clan', 'tribe'
            ],
            'FAIRY TALE' => [
                'princess', 'prince', 'castle', 'dragon', 'fairy', 'witch', 'forest', 'magic', 'spell', 'curse',
                'king', 'queen', 'knight', 'quest', 'adventure', 'hero', 'villain', 'goblin', 'elf', 'dwarf',
                'giant', 'ogre', 'troll', 'mermaid', 'unicorn', 'phoenix', 'grimm', 'brothers', 'fable', 'legend',
                'myth', 'storybook', 'enchanted', 'happily', 'ever', 'after', 'tale', 'narrative', 'protagonist', 'antagonist',
                'moral', 'lesson', 'dream', 'wish', 'fantasy', 'whimsy', 'charm', 'romance', 'adventure', 'bravery'
            ],
            'FABLE' => [
                'story', 'lesson', 'moral', 'animal', 'fox', 'lion', 'hare', 'tortoise', 'crow', 'wolf',
                'sheep', 'mouse', 'cat', 'ant', 'grasshopper', 'foolish', 'wise', 'deceitful', 'honest', 'pride',
                'humility', 'generosity', 'greed', 'courage', 'cowardice', 'envy', 'contentment', 'truth', 'lie', 'trickster',
                'sage', 'wisdom', 'folklore', 'myth', 'legend', 'narrative', 'protagonist', 'antagonist', 'conflict', 'resolution',
                'plot', 'theme', 'character', 'setting', 'climax', 'denouement', 'parable', 'allegory', 'didactic', 'classic'
            ],
            'FICTION IN VERSE' => [
                'poetry', 'rhyme', 'stanza', 'verse', 'couplet', 'quatrain', 'sonnet', 'epic', 'ballad', 'haiku',
                'limerick', 'free', 'verse', 'blank', 'verse', 'narrative', 'lyric', 'dramatic', 'elegy', 'ode',
                'epitaph', 'acrostic', 'sestina', 'villanelle', 'tercet', 'quintain', 'octave', 'refrain', 'meter', 'foot',
                'iambic', 'trochaic', 'dactylic', 'anapestic', 'spondee', 'pyrrhic', 'pentameter', 'tetrameter', 'trimeter', 'dimeter',
                'monometer', 'enjambment', 'caesura', 'alliteration', 'assonance', 'consonance', 'onomatopoeia', 'imagery', 'symbolism', 'theme'
            ],
            'FICTION' => [
                'novel', 'short', 'story', 'plot', 'character', 'setting', 'conflict', 'resolution', 'theme', 'narrative',
                'protagonist', 'antagonist', 'point', 'view', 'dialogue', 'exposition', 'rising', 'action', 'climax', 'falling',
                'action', 'denouement', 'flashback', 'foreshadowing', 'subplot', 'arc', 'pacing', 'tone', 'mood', 'genre',
                'mystery', 'thriller', 'romance', 'fantasy', 'science', 'fiction', 'historical', 'realistic', 'literary', 'satire',
                'allegory', 'symbolism', 'imagery', 'motif', 'theme', 'style', 'voice', 'perspective', 'epilogue', 'prologue'
            ],
            'DRAMA' => [
                'play', 'theater', 'stage', 'script', 'actor', 'actress', 'director', 'producer', 'scene', 'dialogue',
                'monologue', 'soliloquy', 'tragedy', 'comedy', 'melodrama', 'farce', 'romantic', 'tragicomedy', 'musical', 'opera',
                'ballet', 'performance', 'rehearsal', 'costume', 'set', 'prop', 'lighting', 'sound', 'design', 'makeup',
                'choreography', 'blocking', 'improvisation', 'character', 'motivation', 'conflict', 'climax', 'resolution', 'audience', 'applause',
                'curtain', 'call', 'stage', 'manager', 'technical', 'crew', 'prompt', 'cue', 'understudy', 'ensemble'
            ],
            'BOOKS' => [
                'author', 'title', 'publisher', 'genre', 'novel', 'nonfiction', 'biography', 'memoir', 'fantasy', 'romance',
                'mystery', 'thriller', 'horror', 'science', 'fiction', 'historical', 'fiction', 'literary', 'fiction', 'young',
                'adult', 'classic', 'bestseller', 'manuscript', 'editor', 'proofreader', 'chapter', 'page', 'hardcover', 'paperback',
                'eBook', 'audiobook', 'library', 'bookstore', 'reading', 'book', 'club', 'book', 'review', 'literary', 'criticism',
                'cover', 'illustration', 'preface', 'foreword', 'introduction', 'dedication', 'acknowledgments', 'appendix', 'index', 'glossary'
            ],
            'HISTORY' => [
                'ancient', 'medieval', 'modern', 'empire', 'civilization', 'revolution', 'war', 'treaty', 'colonization', 'independence',
                'dynasty', 'monarchy', 'republic', 'democracy', 'dictatorship', 'feudalism', 'industrial', 'reformation', 'renaissance', 'enlightenment',
                'crusades', 'holocaust', 'genocide', 'slavery', 'abolition', 'exploration', 'discovery', 'expedition', 'migration', 'settlement',
                'artifact', 'archaeology', 'chronicle', 'timeline', 'historian', 'primary', 'source', 'secondary', 'source', 'oral',
                'history', 'biography', 'autobiography', 'memoir', 'manuscript', 'document', 'declaration', 'constitution', 'treatise', 'annals'
            ],
        ];


        foreach ($words as $genre => $wordList) {
            $genreModel = Genre::where('name', $genre)->first();
            foreach ($wordList as $word) {
                Word::create(['genre_id' => $genreModel->id, 'word' => $word]);
            }
        }
    }
}
