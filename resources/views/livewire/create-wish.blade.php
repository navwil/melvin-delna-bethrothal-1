<div class="wish-form-card">
    <h4 style="font-family: 'Playfair Display', Georgia, serif; color: #0f2e5a; font-size: 2.6rem; font-weight: 700; margin-bottom: 0.8rem;">Send Your Blessings</h4>
    <p style="color: #64748b; font-size: 1.55rem; margin-bottom: 2.5rem; line-height: 1.5;">Leave your heartfelt prayers &amp; wishes for Melvin &amp; Delna</p>

    <div style="margin-bottom: 2rem;">
        <label for="sampleInput" style="font-weight: 600; color: #0f2e5a; font-size: 1.5rem; margin-bottom: 0.8rem; display: block;">Your Name</label>
        <input wire:model="name" class="wish-input" type="text" placeholder="Enter your name" name="name" required style="width: 100%; border: 1.5px solid #cbd5e1; border-radius: 14px; padding: 1.3rem 1.6rem; font-size: 1.55rem; background: #f8fafc; color: #1e293b; transition: all 0.3s ease; outline: none;">
        @error('name')
        <div class="alert-box alert-box--error" style="border-radius: 12px; margin-top: 0.8rem; padding: 1rem 1.4rem; font-size: 1.4rem;">
            <p>{{ $message }}</p>
        </div>
        @enderror
    </div>

    <div style="margin-bottom: 2.5rem;">
        <label for="exampleMessage" style="font-weight: 600; color: #0f2e5a; font-size: 1.5rem; margin-bottom: 0.8rem; display: block;">Wishes &amp; Prayers</label>
        <textarea wire:model="comment" class="wish-textarea" placeholder="Write your warm wishes for the couple..." name="comment" rows="4" required style="width: 100%; border: 1.5px solid #cbd5e1; border-radius: 14px; padding: 1.3rem 1.6rem; font-size: 1.55rem; background: #f8fafc; color: #1e293b; transition: all 0.3s ease; outline: none; resize: vertical; min-height: 110px;"></textarea>
        @error('comment')
        <div class="alert-box alert-box--error" style="border-radius: 12px; margin-top: 0.8rem; padding: 1rem 1.4rem; font-size: 1.4rem;">
            <p>{{ $message }}</p>
        </div>
        @enderror
    </div>

    <button wire:click="createWish" class="wish-submit-btn" style="width: 100%; padding: 1.4rem 2.8rem; background: linear-gradient(135deg, #1d68bd 0%, #3b82f6 55%, #60a5fa 100%); color: #ffffff; border-radius: 9999px; font-size: 1.6rem; font-weight: 600; border: none; box-shadow: 0 10px 25px rgba(37, 99, 235, 0.35); cursor: pointer; transition: all 0.3s ease; display: inline-flex; align-items: center; justify-content: center;">
        <span>Send Wishes &amp; Blessings</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" style="vertical-align: middle; margin-left: 8px;">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.493-7.493Z"/>
        </svg>
    </button>
</div>
