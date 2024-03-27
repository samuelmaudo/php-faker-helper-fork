<?php

declare(strict_types=1);

namespace Hereldar\FakerHelper\Traits;

trait OptionalText
{
    /**
     * @return ?non-empty-string
     *
     * @example 'Lorem'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function word(): ?string
    {
        return $this->fakerGenerator->word();
    }

    /**
     * Generate an array of random words.
     *
     * @param int<0, max> $nb how many words to return
     * @param bool $asText if true the sentences are returned as one string
     *
     * @return list<non-empty-string>|string|null
     * @psalm-return ($asText is true ? string|null : list<non-empty-string>|null)
     *
     * @example ['Lorem', 'ipsum', 'dolor']
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function words(int $nb = 3, bool $asText = false): array|string|null
    {
        return $this->fakerGenerator->words($nb, $asText);
    }

    /**
     * Generate a random sentence.
     *
     * @param int $nbWords around how many words the sentence should contain
     * @param bool $variableNbWords set to false if you want exactly $nbWords returned,
     *                              otherwise $nbWords may vary by +/-40% with a minimum of 1
     *
     * @return ?non-empty-string
     *
     * @example 'Lorem ipsum dolor sit amet.'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function sentence(int $nbWords = 6, bool $variableNbWords = true): ?string
    {
        return $this->fakerGenerator->sentence($nbWords, $variableNbWords);
    }

    /**
     * Generate an array of sentences.
     *
     * @param int<0, max> $nb how many sentences to return
     * @param bool $asText if true the sentences are returned as one string
     *
     * @return list<non-empty-string>|string|null
     * @psalm-return ($asText is true ? string|null : list<non-empty-string>|null)
     *
     * @example ['Lorem ipsum dolor sit amet.', 'Consectetur adipisicing eli.']
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function sentences(int $nb = 3, bool $asText = false): array|string|null
    {
        return $this->fakerGenerator->sentences($nb, $asText);
    }

    /**
     * Generate a single paragraph.
     *
     * @param int $nbSentences around how many sentences the paragraph should contain
     * @param bool $variableNbSentences set to false if you want exactly $nbSentences returned,
     *                                  otherwise $nbSentences may vary by +/-40% with a minimum of 1
     *
     * @return ?non-empty-string
     *
     * @example 'Sapiente sunt omnis. Ut pariatur ad autem ducimus et. Voluptas rem voluptas sint modi dolorem amet.'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function paragraph(int $nbSentences = 3, bool $variableNbSentences = true): ?string
    {
        return $this->fakerGenerator->paragraph($nbSentences, $variableNbSentences);
    }

    /**
     * Generate an array of paragraphs.
     *
     * @param int<0, max> $nb how many paragraphs to return
     * @param bool $asText if true the paragraphs are returned as one string, separated by two newlines
     *
     * @return list<non-empty-string>|string|null
     * @psalm-return ($asText is true ? string|null : list<non-empty-string>|null)
     *
     * @example [$paragraph1, $paragraph2, $paragraph3]
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function paragraphs(int $nb = 3, bool $asText = false): array|string|null
    {
        return $this->fakerGenerator->paragraphs($nb, $asText);
    }

    /**
     * Generate a text string.
     * Depending on the $maxNbChars, returns a string made of words, sentences, or paragraphs.
     *
     * @param int $maxNbChars Maximum number of characters the text should contain (minimum 5)
     *
     * @return ?non-empty-string
     *
     * @example 'Sapiente sunt omnis. Ut pariatur ad autem ducimus et. Voluptas rem voluptas sint modi dolorem amet.'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function text(int $maxNbChars = 200): ?string
    {
        return $this->fakerGenerator->text($maxNbChars);
    }

    /**
     * Generate a text string by the Markov chain algorithm.
     * Depending on the $maxNbChars, returns a random valid looking text. The algorithm
     * generates a weighted table with the specified number of words as the index and the
     * possible following words as the value.
     *
     * @param int $maxNbChars Maximum number of characters the text should contain (minimum: 10)
     * @param int $indexSize Determines how many words are considered for the generation of the next word.
     *                       The minimum is 1, and it produces a higher level of randomness, although the
     *                       generated text usually doesn't make sense. Higher index sizes (up to 5)
     *                       produce more correct text, at the price of less randomness.
     *
     * @return ?non-empty-string
     *
     * @example 'Alice, swallowing down her flamingo, and began by taking the little golden key'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function realText(int $maxNbChars = 200, int $indexSize = 2): ?string
    {
        return $this->fakerGenerator->realText($maxNbChars, $indexSize);
    }

    /**
     * Generate a text string by the Markov chain algorithm.
     * Depending on the $maxNbChars, returns a random valid looking text. The algorithm
     * generates a weighted table with the specified number of words as the index and the
     * possible following words as the value.
     *
     * @param int $minNbChars Minimum number of characters the text should contain (maximum: 8)
     * @param int $maxNbChars Maximum number of characters the text should contain (minimum: 10)
     * @param int $indexSize Determines how many words are considered for the generation of the next word.
     *                       The minimum is 1, and it produces a higher level of randomness, although the
     *                       generated text usually doesn't make sense. Higher index sizes (up to 5)
     *                       produce more correct text, at the price of less randomness.
     *
     * @return ?non-empty-string
     *
     * @example 'Alice, swallowing down her flamingo, and began by taking the little golden key'
     *
     * @psalm-suppress MixedInferredReturnType
     */
    public function realTextBetween(int $minNbChars = 160, int $maxNbChars = 200, int $indexSize = 2): ?string
    {
        return $this->fakerGenerator->realTextBetween($minNbChars, $maxNbChars, $indexSize);
    }
}
