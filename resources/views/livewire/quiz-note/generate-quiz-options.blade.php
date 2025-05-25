<div class="w-[390px]" x-data="{
    totalQuizTime: false,
    timerPerQuestion: 'off',
    allowGoingBack: false,
    allowSkipping: false,
    questionTypes: [],
    difficultyLevel: 'easy',
    numberOfQuestions: 10,
    immediateAnswerFeedback: false,
    explanationAfterAnswer: false,
    includeExplanations: false,
    toggleTimerPerQuestion(value) {
        this.timerPerQuestion = value;
    },
    toggleDifficultyLevel(level) {
        this.difficultyLevel = level;
    },
    getQuizOptions() {
        return {
            totalQuizTime: this.totalQuizTime,
            timerPerQuestion: this.timerPerQuestion,
            allowGoingBack: this.allowGoingBack,
            allowSkipping: this.allowSkipping,
            questionTypes: this.questionTypes,
            difficultyLevel: this.difficultyLevel,
            numberOfQuestions: this.numberOfQuestions,
            immediateAnswerFeedback: this.immediateAnswerFeedback,
            explanationAfterAnswer: this.explanationAfterAnswer,
            includeExplanations: this.includeExplanations
        };
    }
}" x-ref="quizOptions">
    <p class="text-gray-500 p-3 bg-gray-100 rounded-sm text-xs">Please select your preferred method of generating the
        quizes.</p>

    <div class="mt-4 flex flex-col gap-3.5">
        <h3 class="border-b border-gray-200 pb-1.5 font-semibold text-[15px]">Quiz Timer Settings</h3>

        <div class="flex items-center justify-between gap-10">
            <div>
                <h4 class="text-sm">Enable Total Quiz Time</h4>
                <p class="text-gray-500 text-xxs">
                    Activate a total quiz timer to track overall time spent on the quiz.
                </p>
            </div>

            <button @click="totalQuizTime = !totalQuizTime">
                <x-forms.toggle :on="false" x-bind:on="totalQuizTime" />
            </button>
        </div>

        <div class="flex flex-col justify-between">
            <div>
                <h4 class="text-sm">Timer Per Question</h4>
                <p class="text-gray-500 text-xxs">
                    Set a specific timer per question to enhance focus and time management.
                </p>
            </div>

            <div class="flex items-center gap-1 mt-2">
                <button @click="toggleTimerPerQuestion('off')"
                    :class="{ 'border-blue-400': timerPerQuestion === 'off', 'border-gray-100': timerPerQuestion !== 'off' }"
                    class="flex-1 bg-gray-100 border p-1 text-xs rounded-lg cursor-pointer">Off</button>
                <button @click="toggleTimerPerQuestion('1min')"
                    :class="{ 'border-blue-400': timerPerQuestion === '1min', 'border-gray-100': timerPerQuestion !== '1min' }"
                    class="flex-1 bg-gray-100 border p-1 text-xs rounded-lg cursor-pointer">1 Min</button>
                <button @click="toggleTimerPerQuestion('10min')"
                    :class="{ 'border-blue-400': timerPerQuestion === '10min', 'border-gray-100': timerPerQuestion !== '10min' }"
                    class="flex-1 bg-gray-100 border p-1 text-xs rounded-lg cursor-pointer">10 Min</button>
                <button @click="toggleTimerPerQuestion('20min')"
                    :class="{ 'border-blue-400': timerPerQuestion === '20min', 'border-gray-100': timerPerQuestion !== '20min' }"
                    class="flex-1 bg-gray-100 border p-1 text-xs rounded-lg cursor-pointer">20 Min</button>
                <button @click="toggleTimerPerQuestion('30min')"
                    :class="{ 'border-blue-400': timerPerQuestion === '30min', 'border-gray-100': timerPerQuestion !== '30min' }"
                    class="flex-1 bg-gray-100 border p-1 text-xs rounded-lg cursor-pointer">30 Min</button>
                <button @click="toggleTimerPerQuestion('1hr')"
                    :class="{ 'border-blue-400': timerPerQuestion === '1hr', 'border-gray-100': timerPerQuestion !== '1hr' }"
                    class="flex-1 bg-gray-100 border p-1 text-xs rounded-lg cursor-pointer">1 Hr</button>
            </div>
        </div>
    </div>

    <div class="mt-4 flex flex-col gap-3.5">
        <h3 class="border-b border-gray-200 pb-1.5 font-semibold text-[15px]">Navigation Controls</h3>

        <div class="flex items-center justify-between gap-10">
            <div>
                <h4 class="text-sm">Allow Going Back to Previous Questions</h4>
                <p class="text-gray-500 text-xxs">
                    Enable going back to previous questions for review and correction.
                </p>
            </div>

            <button @click="allowGoingBack = !allowGoingBack">
                <x-forms.toggle :on="false" x-bind:on="allowGoingBack" />
            </button>
        </div>
        <div class="flex items-center justify-between gap-10">
            <div>
                <h4 class="text-sm">Allow Skipping Questions</h4>
                <p class="text-gray-500 text-xxs">
                    Enable skipping questions and return to them later, enhancing flexibility.
                </p>
            </div>

            <button @click="allowSkipping = !allowSkipping">
                <x-forms.toggle :on="false" x-bind:on="allowSkipping" />
            </button>
        </div>
    </div>

    <div class="mt-4 flex flex-col gap-3.5">
        <h3 class="border-b border-gray-200 pb-1.5 font-semibold text-[15px]">Question Configuration</h3>

        <div class="flex flex-col justify-between">
            <div>
                <h4 class="text-sm">Question Types</h4>
                <p class="text-gray-500 text-xxs">
                    Choose question formats (e.g., multiple choice, true/false, etc.).
                </p>
            </div>

            <div class="mt-2">
                <x-forms.select :options="[
                    ['value' => 'multiple_choice_multiple', 'label' => 'Multiple Choice (Multiple Answer)'],
                    ['value' => 'multiple_choice_single', 'label' => 'Multiple Choice (Single Answer)'],
                    ['value' => 'true_false', 'label' => 'True / False'],
                    ['value' => 'fill_blank', 'label' => 'Fill in the Blank'],
                    ['value' => 'short_answer', 'label' => 'Short Answer'],
                    ['value' => 'essay', 'label' => 'Long Answer (Essay)'],
                    ['value' => 'ordering', 'label' => 'Ordering / Sequence'],
                ]" wire:model="selectedOption" />
            </div>
        </div>
        <div class="flex flex-col justify-between">
            <div>
                <h4 class="text-sm">Difficulty Levels</h4>
                <p class="text-gray-500 text-xxs">
                    Filter questions by difficulty (Easy, Medium, Hard).
                </p>
            </div>

            <div class="flex items-center gap-1 mt-2">
                <button @click="toggleDifficultyLevel('easy')"
                    :class="{ 'border-blue-400': difficultyLevel === 'easy', 'border-gray-100': difficultyLevel !== 'easy' }"
                    class="flex-1 bg-gray-100 border p-1 text-xs rounded-lg cursor-pointer">
                    Easy
                </button>
                <button @click="toggleDifficultyLevel('medium')"
                    :class="{ 'border-blue-400': difficultyLevel === 'medium', 'border-gray-100': difficultyLevel !== 'medium' }"
                    class="flex-1 bg-gray-100 border p-1 text-xs rounded-lg cursor-pointer">
                    Medium
                </button>
                <button @click="toggleDifficultyLevel('hard')"
                    :class="{ 'border-blue-400': difficultyLevel === 'hard', 'border-gray-100': difficultyLevel !== 'hard' }"
                    class="flex-1 bg-gray-100 border p-1 text-xs rounded-lg cursor-pointer">
                    Hard
                </button>
            </div>
        </div>
        <div class="flex items-center justify-between gap-10">
            <div>
                <h4 class="text-sm">Number of Questions</h4>
                <p class="text-gray-500 text-xxs">
                    Select how many questions to include in the quiz (default 10, max 30).
                </p>
            </div>

            <div class="w-20">
                <x-forms.input type="number" x-model="numberOfQuestions" min="5" max="30" />
            </div>
        </div>
    </div>

    <div class="mt-4 flex flex-col gap-3.5">
        <h3 class="border-b border-gray-200 pb-1.5 font-semibold text-[15px]">Answer Feedback Options</h3>

        <div class="flex items-center justify-between gap-10">
            <div>
                <h4 class="text-sm">Show Answer Immediately</h4>
                <p class="text-gray-500 text-xxs">
                    Display whether the selected answer is correct right after submission.
                </p>
            </div>

            <button @click="immediateAnswerFeedback = !immediateAnswerFeedback">
                <x-forms.toggle :on="false" x-bind:on="immediateAnswerFeedback" />
            </button>
        </div>
        <div class="flex items-center justify-between gap-10">
            <div>
                <h4 class="text-sm">Show Explanation After Each Question</h4>
                <p class="text-gray-500 text-xxs">
                    Present answer explanations immediately after each response (only if explanations exist).
                </p>
            </div>

            <button @click="explanationAfterAnswer = !explanationAfterAnswer">
                <x-forms.toggle :on="false" x-bind:on="explanationAfterAnswer" />
            </button>
        </div>

        <div class="flex items-center justify-between gap-10">
            <div>
                <h4 class="text-sm">Include Answer Explanations</h4>
                <p class="text-gray-500 text-xxs">
                    Attach explanations to questions. Required for the above setting to work.
                </p>
            </div>

            <button @click="includeExplanations = !includeExplanations">
                <x-forms.toggle :on="false" x-bind:on="includeExplanations" />
            </button>
        </div>
    </div>
</div>
