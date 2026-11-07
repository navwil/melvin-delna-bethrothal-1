<div class="wishes-feed-list" style="display: flex; flex-direction: column; gap: 1.6rem;">
    @forelse ($wish as $item)
    <div class="wish-bubble-item" style="background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 20px; padding: 1.8rem 2.2rem; box-shadow: 0 4px 16px rgba(15, 23, 42, 0.05); transition: transform 0.25s ease, box-shadow 0.25s ease;">
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem;">
            <div style="display: flex; align-items: center; gap: 1.2rem;">
                <div style="width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg, #1d68bd, #60a5fa); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.6rem; box-shadow: 0 4px 10px rgba(37, 99, 235, 0.25);">
                    {{ strtoupper(substr($item->name, 0, 1)) }}
                </div>
                <div>
                    <h5 style="margin: 0; font-size: 1.65rem; font-weight: 700; color: #0f2e5a; letter-spacing: -0.01em;">{{ $item->name }}</h5>
                    <span style="font-size: 1.25rem; color: #94a3b8; font-weight: 500;">Guest &bull; {{ date_format(date_create($item->created_at), "M d, Y") }}</span>
                </div>
            </div>
            <span style="background: #eff6ff; color: #2563eb; font-size: 1.2rem; font-weight: 600; padding: 0.3rem 1rem; border-radius: 9999px; border: 1px solid #bfdbfe;">
                💙 Blessing
            </span>
        </div>
        <p style="margin: 0; font-size: 1.55rem; color: #334155; line-height: 1.6; word-break: break-word;">{{ $item->comment }}</p>
    </div>
    @empty
    <div style="text-align: center; padding: 4rem 2rem; background: #ffffff; border: 1.5px dashed #cbd5e1; border-radius: 20px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#93c5fd" viewBox="0 0 16 16" style="margin-bottom: 1.2rem;">
            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
        </svg>
        <p style="font-size: 1.6rem; font-weight: 600; color: #0f2e5a; margin-bottom: 0.5rem;">Be the First to Send Blessings!</p>
        <p style="font-size: 1.45rem; color: #64748b; margin: 0;">Share your warm prayers and wishes for Melvin &amp; Delna above.</p>
    </div>
    @endforelse
</div>
